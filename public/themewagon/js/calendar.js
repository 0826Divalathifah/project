document.addEventListener('DOMContentLoaded', function() {
    const calendar = document.getElementById('calendar');
    const eventDetailElement = document.getElementById('event-detail');
    const today = new Date();
    let currentMonth = today.getMonth();
    let currentYear = today.getFullYear();

    const daysOfWeek = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
    const monthNames = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];

    // Jadwal event
    const schedules = {
        '2024-10-10': { location: 'Gelanggang Pemuda', event: 'Pentas Tari' },
        '2024-10-15': { location: 'Pendopo Kecamatan', event: 'Resepsi Pernikahan' },
    };

    document.getElementById('prev-month').addEventListener('click', function() {
        currentMonth--;
        if (currentMonth < 0) {
            currentMonth = 11;
            currentYear--;
        }
        generateCalendar(currentMonth, currentYear);
        eventDetailElement.textContent = "Klik pada tanggal yang memiliki tanda (*) untuk melihat detail acara.";
    });

    document.getElementById('next-month').addEventListener('click', function() {
        currentMonth++;
        if (currentMonth > 11) {
            currentMonth = 0;
            currentYear++;
        }
        generateCalendar(currentMonth, currentYear);
        eventDetailElement.textContent = "Klik pada tanggal yang memiliki tanda (*) untuk melihat detail acara.";
    });

    function generateCalendar(month, year) {
        calendar.innerHTML = '';
        document.getElementById('month-year').textContent = `${monthNames[month]} ${year}`;

        const firstDay = new Date(year, month, 1).getDay();
        const daysInMonth = new Date(year, month + 1, 0).getDate();

        // Isi dengan hari-hari kosong hingga awal bulan
        for (let i = 0; i < firstDay; i++) {
            const blankDiv = document.createElement('div');
            blankDiv.classList.add('col', 'text-center', 'p-2');
            calendar.appendChild(blankDiv);
        }

        // Buat tanggal kalender
        for (let day = 1; day <= daysInMonth; day++) {
            const dateStr = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
            const dayDiv = document.createElement('div');
            dayDiv.classList.add('col', 'text-center', 'p-2', 'border', 'rounded');
            dayDiv.innerHTML = `<strong>${day}</strong>`;

            if (schedules[dateStr]) {
                dayDiv.classList.add('bg-warning');
                dayDiv.innerHTML += `<small class="text-danger"> *</small>`;
                dayDiv.addEventListener('click', function() {
                    eventDetailElement.innerHTML = `
                        <p><strong>Event:</strong> ${schedules[dateStr].event}</p>
                        <p><strong>Tempat:</strong> ${schedules[dateStr].location}</p>`;
                });
            } else {
                dayDiv.addEventListener('click', function() {
                    eventDetailElement.textContent = "Tidak ada acara pada tanggal ini.";
                });
            }

            calendar.appendChild(dayDiv);
        }
    }

    generateCalendar(currentMonth, currentYear);
});
