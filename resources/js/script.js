// Utilidades
const qs = (sel, ctx = document) => ctx.querySelector(sel)
const qsa = (sel, ctx = document) => Array.from(ctx.querySelectorAll(sel))

// Header shrink on scroll
const header = qs('#header')
const onScroll = () => {
  if (window.scrollY > 12) header.classList.add('scrolled')
  else header.classList.remove('scrolled')
}
window.addEventListener('scroll', onScroll)
onScroll()

// Mobile menu
const toggle = qs('.nav-toggle')
const menu = qs('.menu')
if (toggle && menu) {
  toggle.addEventListener('click', () => {
    const open = menu.classList.toggle('open')
    toggle.setAttribute('aria-expanded', open ? 'true' : 'false')
  })
  qsa('.menu a').forEach(a => {
    a.addEventListener('click', () => {
      menu.classList.remove('open')
      toggle.setAttribute('aria-expanded', 'false')
    })
  })
}

// Reveal on scroll
const io = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if (entry.isIntersecting) {
      entry.target.classList.add('is-visible')
      io.unobserve(entry.target)
    }
  })
}, { threshold: 0.12 })
qsa('.reveal').forEach(el => io.observe(el))

// Current year in footer
const yearEl = qs('#year')
if (yearEl) yearEl.textContent = new Date().getFullYear()

// Contact form validation (front-end only)
const form = qs('#contact-form')
const status = qs('#form-status')
const validators = {
  nombre: v => v.trim().length >= 3 || 'El nombre debe tener al menos 3 caracteres.',
  email: v => /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(v) || 'Ingresa un correo válido.',
  mensaje: v => v.trim().length >= 10 || 'El mensaje debe tener al menos 10 caracteres.'
}

function setFieldError(fieldEl, msg) {
  const group = fieldEl.closest('.form-field')
  const errorMsg = qs('.error-msg', group)
  if (msg) {
    fieldEl.classList.add('error')
    if (errorMsg) errorMsg.textContent = msg
  } else {
    fieldEl.classList.remove('error')
    if (errorMsg) errorMsg.textContent = ''
  }
}

function validateField(fieldEl) {
  const name = fieldEl.name
  const value = fieldEl.value || ''
  const validator = validators[name]
  if (!validator) return true
  const res = validator(value)
  if (res !== true) {
    setFieldError(fieldEl, res)
    return false
  }
  setFieldError(fieldEl, '')
  return true
}

if (form) {
  const fields = ['nombre', 'email', 'mensaje'].map(n => qs(`[name="${n}"]`, form))

  fields.forEach(f => {
    f.addEventListener('input', () => validateField(f))
    f.addEventListener('blur', () => validateField(f))
  })

  form.addEventListener('submit', e => {
    e.preventDefault()
    status.textContent = ''
    const ok = fields.every(validateField)
    if (!ok) {
      status.style.color = '#ff9f9f'
      status.textContent = 'Revisa los campos marcados en rojo.'
      return
    }

    // Simulación de envío (no hay backend)
    setTimeout(() => {
      status.style.color = '#8de4a3'
      status.textContent = '¡Gracias! Tu mensaje ha sido enviado.'
      form.reset()
    }, 500)
  })
}