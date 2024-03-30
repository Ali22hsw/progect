const sideMenu = document.querySelector("aside");
const menBtn = document.querySelector("#menu-btn");
const closeBtn = document.querySelector("#close-btn");
const themeToggler = document.querySelector(".theme-toggler");

menBtn.addEventListener('click', () => {
    sideMenu.style.display = 'block';
})
closeBtn.addEventListener('click', () => {
    sideMenu.style.display = 'none';
})
themeToggler.addEventListener('click', () => {
    document.body.classList.toggle('dark-them-variables');

    themeToggler.querySelector('span:nth-child(1)').classList.toggle('active');
    themeToggler.querySelector('span:nth-child(2)').classList.toggle('active');
} )

// fill orders in tabel 
// نظوري هذا الامر الكتلك علية الي من عنده نستدعي الكتابه بضيج الصفحة هذا الكود الجوه
Orders.forEach(order => {

    const tr = document.createElement('tr');
    const trContent = `
                        <td>${order.Government_department}</td>
                        <td>${order.type}</td>
                        <td>${order.path_person}</td>
                        <td class="${order.image_path === 'Declined' ? 'danger' : order.shipping === 'pending' ? 'warning' : 'primary'}">${order.date}</td>
                        <td class="primary">${order.date}</td>
                        <td>${order.note}<
                        `;
    tr.innerHTML = trContent;
    document.querySelector('table tbody').appendChild(tr);
})