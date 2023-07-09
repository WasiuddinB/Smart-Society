// /* resources/js/map.js */
// document.addEventListener('DOMContentLoaded', function () {
//     const blocks = document.querySelectorAll('.block');

//     blocks.forEach(block => {
//         block.addEventListener('click', function () {
//             const x = block.getAttribute('data-x');
//             const y = block.getAttribute('data-y');

//             if (block.classList.contains('empty')) {
//                 showModal(x, y);
//             } else {
//                 alert('Block is already taken!');
//             }
//         });
//     });

    
//     function showModal(x, y, isTaken) {
//         const modalContent = document.querySelector('.modal-content');
//         const modalStatus = isTaken ? 'Block is taken' : 'Block is available';
    
//         modalContent.innerHTML = `
//             <h2>Block Details</h2>
//             <p>X: ${x}</p>
//             <p>Y: ${y}</p>
//             <p>Status: ${modalStatus}</p>
//             <button id="saveBlockBtn">Save Block</button>
//         `;
    
//         const modal = document.getElementById('organizationModal');
//         modal.style.display = 'block';
    
//         const saveBtn = document.getElementById('saveBlockBtn');
//         saveBtn.addEventListener('click', function () {
//             saveBlockData(x, y);
//         });
//     }
    
//     function saveBlockData(x, y) {
//         const data = {
//             x: x,
//             y: y
//         };
    
//         fetch('/blocks', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//             body: JSON.stringify(data)
//         })
//         .then(response => {
//             if (response.ok) {
//                 alert('Block data saved successfully!');
//             } else {
//                 alert('Error saving block data!');
//             }
//         })
//         .catch(error => {
//             console.error('Error saving block data:', error);
//         });
//     }

    










    
//     function createOrganization(name, x, y) {
//         // Make the AJAX request to create the organization
//         fetch('/organizations', {
//             method: 'POST',
//             headers: {
//                 'Content-Type': 'application/json',
//                 'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content')
//             },
//             body: JSON.stringify({ name, x, y })
//         })
//         .then(response => response.json())
//         .then(data => {
//             alert(data.message);
//         })
//         .catch(error => {
//             console.error('Error:', error);
//         });
//     }
    
//     function hideModal() {
//         const modal = document.getElementById('organizationModal');
//         modal.style.display = 'none';
//     }
// });
