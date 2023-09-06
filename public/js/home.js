document.addEventListener("DOMContentLoaded", function () {
    const modalButtons = document.querySelectorAll('[data-modal-toggle]');
    const closeButtons = document.querySelectorAll('[data-modal-hide]');

    modalButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const targetModalId = button.getAttribute('data-modal-target');
        const targetModal = document.getElementById(targetModalId);

        if (targetModal) {
          targetModal.classList.remove('hidden');
          targetModal.setAttribute('aria-hidden', 'false');
          document.body.style.overflow = 'hidden'; // Evita el scroll de fondo cuando el modal está abierto
        }
      });
    });

    closeButtons.forEach((button) => {
      button.addEventListener('click', () => {
        const targetModalId = button.getAttribute('data-modal-hide');
        const targetModal = document.getElementById(targetModalId);

        if (targetModal) {
          targetModal.classList.add('hidden');
          targetModal.setAttribute('aria-hidden', 'true');
          document.body.style.overflow = 'auto'; // Habilita el scroll nuevamente cuando se cierra el modal
        }
      });
    });
});