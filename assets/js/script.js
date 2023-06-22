if ('serviceWorker' in navigator) {
    navigator.serviceWorker.register('./service-worker.js')
    .then(function(registration) {
        console.log('Service Worker registered with scope:', registration.scope);
    })
    .catch(function(error) {
        console.log('Service Worker registration failed:', error);
    });
}

// AOS.init();

// AOS.init({
//   duration: 1000,
//   delay: 500,
//   easing: 'ease-in-out',
//   once: true
// });

// alert("*")

// Swal.fire({
//   position: 'center',
//   icon: 'success',
//   title: 'Data Sukses Dikirim',
//   showConfirmButton: false,
//   timer: 1500
// })