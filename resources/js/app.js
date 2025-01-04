import './bootstrap';

// Import Library AnimateCSS
import 'animate.css/animate.min.css';

// Import Library AOS
import AOS from 'aos';
import 'aos/dist/aos.css';
AOS.init();

document.addEventListener('DOMContentLoaded', function () {
  // Take element ID alert
  const alert = document.getElementById('alert');

  // Take element ID section form
  const formSection = document.getElementById('formSection');

  // Take element ID input password
  const showPassword = document.getElementById('showPassword');
  const passwordInput = document.getElementById('passwordInput');

  // Take element ID button form
  const btnForm = document.getElementById('btnForm');
  const textForm = document.getElementById('textForm');
  const iconsForm = document.getElementById('iconsForm');

  // Take element ID offcanvas menu
  const btnMenuSection = document.getElementById('btnMenuSection');
  const listMenuSection = document.getElementById('listMenuSection');
  const iconsMenuSection = document.getElementById('iconsMenuSection');
  const backgroundMenuSection = document.getElementById('backgroundMenuSection');

  // Take element ID formCreate
  const cover = document.getElementById('cover');
  const coverAlert = document.getElementById('coverAlert');

  // Feature show and hidden password input singIn & signUp
  if (passwordInput && showPassword) {
    showPassword.addEventListener('click', function () {
      if (passwordInput.type === 'password') {
        passwordInput.type = 'text';
        showPassword.classList.remove('bi-eye-slash-fill');
        showPassword.classList.add('bi-eye-fill');
      } else {
        passwordInput.type = 'password';
        showPassword.classList.remove('bi-eye-fill');
        showPassword.classList.add('bi-eye-slash-fill');
      }
    });
  }

  // Feature animation button spinner
  if (btnForm && textForm && iconsForm) {
    btnForm.addEventListener('click', (event) => {
      event.preventDefault();
      const requiredFields = formSection.querySelectorAll('[required]');
      let success = true;
      requiredFields.forEach(field => {
        if (!field.value.trim()) {
          success = false;
          field.reportValidity();
        }
      });
      if (success) {
        textForm.classList.add('hidden');
        iconsForm.classList.remove('hidden');
        formSection.submit();
      }
    });
  }

  // Feature show alert notification 
  if (alert) {
    alert.classList.add('animate__animated', 'animate__slideInDown');
    setTimeout(() => {
      alert.classList.remove('animate__slideOutDown')
      alert.classList.add('animate__slideOutUp');
      alert.addEventListener('animationend', () => {
        alert.remove();
      });
    }, 4000);
  }

  // Feature load screen page dashboard
  setTimeout(() => {
    const screenLoading = document.getElementById('screenLoading');
    if (screenLoading) {
      screenLoading.remove();
    }
  }, 200);

  // Feature button show & hidden list menu offcanva page dashboard
  if (btnMenuSection && listMenuSection && iconsMenuSection && backgroundMenuSection) {
    let menuListShow = false;
    btnMenuSection.addEventListener('click', function (event) {
      event.stopPropagation();
      menuListShow = !menuListShow;
      toggleMenu(menuListShow);
    });
    document.addEventListener('click', function (event) {
      if (menuListShow && !listMenuSection.contains(event.target) && !btnMenuSection.contains(event.target)) {
        menuListShow = false;
        toggleMenu(menuListShow);
      }
    });
    function toggleMenu(open) {
      listMenuSection.classList.toggle('-translate-x-full', !open);
      listMenuSection.classList.toggle('translate-x-0', open);
      backgroundMenuSection.classList.toggle('-translate-x-full', !open);
      if (open) {
        iconsMenuSection.classList.replace('bi-list', 'bi-x');
      } else {
        iconsMenuSection.classList.replace('bi-x', 'bi-list');
      }
    }
  }

  // Feature alert form input cover
  function validateFile(cover, coverAlert) {
    const file = cover.files[0];
    if (file && !file.type.startsWith('image/')) {
      coverAlert.textContent = 'Tambahkan dalam format image, jpg, jpeg, png';
      coverAlert.classList.remove('active');
    } else {
      coverAlert.textContent = '';
      coverAlert.classList.add('active');
    }
  }
  if (cover && coverAlert) {
    cover.addEventListener('change', () => {
      validateFile(cover, coverAlert);
    });
  }
});

// Feature disable inspect element to browser
document.oncontextmenu = () => {
  alert('Anda tidak dapat melakukan inspect element');
  return false;
}

// Feature disable commad keyboard inspect element to browser 
document.onkeydown = () => {
  if (e.key == "F12") {
    alert('Data tidak tersedia');
    return false;
  }
  if (e.ctrlkey == "u") {
    alert('Data tidak tersedia');
    return false;
  }
  if (e.ctrlkey == "c") {
    alert('Data tidak tersedia');
    return false;
  }
  if (e.ctrlkey == "v") {
    alert('Data tidak tersedia');
    return false;
  }
}