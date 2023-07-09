
document.addEventListener('DOMContentLoaded', function () {
    const blocks = document.querySelectorAll('.block');

    blocks.forEach(block => {
        block.addEventListener('click', function () {
            const x = block.getAttribute('data-x');
            const y = block.getAttribute('data-y');

            if (block.classList.contains('empty')) {
                showModal(x, y);
            } else {
                alert('Block is already taken!');
            }
        });
    });

    function showModal(x, y) {
        const modalName = document.getElementById('modal-name');
        const modalX = document.getElementById('modal-x');
        const modalY = document.getElementById('modal-y');
        const modalForm = document.getElementById('modal-form');

        modalX.textContent = `X: ${x}`;
        modalY.textContent = `Y: ${y}`;
        modalForm.addEventListener('submit', function (event) {
            event.preventDefault();
            const name = document.getElementById('name').value;

            if (name) {
                createOrganization(name, x, y);
                hideModal();
            } else {
                alert('Please enter an organization name.');
            }
        });

        const modal = document.getElementById('organizationModal');
        modal.style.display = 'block';
    }

    function createOrganization(name, x, y) {

        fetch('/organizations', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
            },
            body: JSON.stringify({ name, x, y })
        })
        .then(response => response.json())
        .then(data => {
            alert(data.message);
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }

    function hideModal() {
        const modal = document.getElementById('organizationModal');
        modal.style.display = 'none';
    }
});
