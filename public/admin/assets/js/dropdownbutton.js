function updateButton(newClass, newText) {
    const button = document.getElementById('dropdownMenuSizeButton3');
    const dropdown = bootstrap.Dropdown.getOrCreateInstance(button); // Ambil instance dropdown

    button.className = 'btn btn-sm dropdown-toggle ' + newClass; // Mengubah class button
    button.textContent = newText; // Mengubah teks pada button

    dropdown.hide(); // Menutup dropdown setelah pemilihan
}
    