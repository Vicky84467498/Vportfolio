document.addEventListener('DOMContentLoaded', function () {
    const menuToggle = document.getElementById('menu-toggle');
    const drawer = document.getElementById('drawer');
    const closeDrawer = document.getElementById('close-drawer');

    function openDrawer() {
        if (!drawer) return;
        drawer.classList.remove('translate-x-full');
        drawer.setAttribute('aria-hidden', 'false');
    }

    function closeDrawerMenu() {
        if (!drawer) return;
        drawer.classList.add('translate-x-full');
        drawer.setAttribute('aria-hidden', 'true');
    }

    if (menuToggle) {
        menuToggle.addEventListener('click', function () {
            const isOpen = drawer && !drawer.classList.contains('translate-x-full');
            if (isOpen) {
                closeDrawerMenu();
            } else {
                openDrawer();
            }
        });
    }

    if (closeDrawer) {
        closeDrawer.addEventListener('click', closeDrawerMenu);
    }

    document.querySelectorAll('#drawer a').forEach(link => {
        link.addEventListener('click', closeDrawerMenu);
    });

    const reveals = document.querySelectorAll('.scroll-reveal');
    const revealOnScroll = () => {
        reveals.forEach(el => {
            const revealTop = el.getBoundingClientRect().top;
            if (revealTop < window.innerHeight - 150) {
                el.classList.add('active');
            }
        });
    };

    window.addEventListener('scroll', revealOnScroll);
    window.addEventListener('load', revealOnScroll);

    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            const href = this.getAttribute('href');
            if (href && href !== '#') {
                const target = document.querySelector(href);
                if (target) {
                    e.preventDefault();
                    const headerHeight = document.querySelector('header') ? document.querySelector('header').offsetHeight : 70;
                    const position = target.getBoundingClientRect().top + window.pageYOffset - headerHeight;
                    window.scrollTo({ top: position, behavior: 'smooth' });
                }
            }
        });
    });

    const typingEffect = document.querySelector('.typing-effect[data-text]');
    if (typingEffect) {
        const fullText = typingEffect.dataset.text.trim();
        if (fullText.length) {
            typingEffect.innerHTML = '<span class="typing-effect__text"></span><span class="typing-effect__cursor" aria-hidden="true"></span>';
            const textNode = typingEffect.querySelector('.typing-effect__text');
            let position = 0;
            const interval = 70;
            const startDelay = 400;
            const typeChar = () => {
                if (position <= fullText.length) {
                    textNode.textContent = fullText.slice(0, position);
                    position += 1;
                    setTimeout(typeChar, interval);
                }
            };
            setTimeout(typeChar, startDelay);
        }
    }

    const backToTop = document.getElementById('backToTop');
    if (backToTop) {
        window.addEventListener('scroll', function () {
            if (window.scrollY > 300) {
                backToTop.style.display = 'inline-block';
            } else {
                backToTop.style.display = 'none';
            }
        });

        backToTop.addEventListener('click', function (event) {
            event.preventDefault();
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });
    }

    const contactForm = document.getElementById('contactForm');
    if (contactForm) {
        contactForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value.trim();
            const email = document.getElementById('email').value.trim();
            const message = document.getElementById('message').value.trim();
            const formMessage = document.getElementById('formMessage');
            const submitButton = contactForm.querySelector('button[type="submit"]');

            if (!name || name.length < 3) {
                return showMessage('Name must be at least 3 characters long.', 'error', formMessage);
            }
            if (!email || !isValidEmail(email)) {
                return showMessage('Please enter a valid email address.', 'error', formMessage);
            }
            if (!message || message.length < 10) {
                return showMessage('Message must be at least 10 characters long.', 'error', formMessage);
            }

            if (submitButton) {
                submitButton.disabled = true;
                const bt = submitButton.querySelector('.btn-text');
                if (bt) bt.textContent = 'Sending...';
            }

            const formData = new FormData(contactForm);

            fetch('includes/send-mail.php', {
                method: 'POST',
                body: formData,
                headers: { 'X-Requested-With': 'XMLHttpRequest' }
            })
                .then(response => response.json())
                .then(data => {
                    if (submitButton) {
                        submitButton.disabled = false;
                        const bt = submitButton.querySelector('.btn-text');
                        if (bt) bt.textContent = 'Send Message';
                    }
                    if (data.success) {
                        showMessage(data.message || 'Message sent successfully!', 'success', formMessage);
                        contactForm.reset();
                    } else {
                        const text = Array.isArray(data.errors) ? data.errors.join('<br>') : data.message;
                        showMessage(text || 'Unable to send your message right now.', 'error', formMessage);
                    }
                })
                .catch(error => {
                    if (submitButton) {
                        submitButton.disabled = false;
                        const bt = submitButton.querySelector('.btn-text');
                        if (bt) bt.textContent = 'Send Message';
                    }
                    showMessage('Error sending message. Please try again later.', 'error', formMessage);
                    console.error('Contact submit error:', error);
                });
        });
    }

    function isValidEmail(email) {
        return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
    }

    function showMessage(message, type, element) {
        if (!element) return;
        element.innerHTML = message;
        element.className = 'form-message ' + type + ' show';
        element.style.display = 'block';
        if (type === 'success') {
            setTimeout(() => {
                element.classList.remove('show');
                element.style.display = 'none';
            }, 5000);
        }
    }
});
