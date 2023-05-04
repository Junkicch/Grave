/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

const switchModal = () => {
    const modal = document.querySelector('.modal');
    const actualStyle = modal.style.display;
    if (actualStyle === 'block') {
        modal.style.display = 'none';
    } else {
        modal.style.display = 'block';
    }
};

const btn = document.querySelector('.car');
btn.addEventListener('click', switchModal);
window.onclick = function (event) {
    const modal = document.querySelector('.modal');
    if (event.target === modal) {
        switchModal();
    }
};
