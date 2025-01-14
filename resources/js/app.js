import "./bootstrap";

window.addEventListener("alert", (event) => {
    let data = event.detail;

    Swal.fire({
        title: data.title,
        icon: data.icon,
        position: data.position || "center",
        confirmButtonText: "OK",
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect ke halaman login
            window.location.href = "/login"; // Sesuaikan URL sesuai dengan route Anda
        }
    });
});

window.addEventListener("selectedRole", (event) => {
    let data2 = event.detail;

    Swal.fire({
        title: data2.title,
        icon: data2.icon,
        position: data2.position || "center",
        confirmButtonText: "OK",
    }).then((result) => {
        if (result.isConfirmed) {
            // Redirect ke halaman Signup
            window.location.href = "/signup"; // Sesuaikan URL sesuai dengan route Anda
        }
    });
});
