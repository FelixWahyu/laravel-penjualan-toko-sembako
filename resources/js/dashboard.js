import {
    Chart,
    BarController,
    BarElement,
    CategoryScale,
    LinearScale,
    Title,
    Tooltip,
    Legend,
} from "chart.js";

Chart.register(
    BarController,
    BarElement,
    CategoryScale,
    LinearScale,
    Title,
    Tooltip,
    Legend
);

window.addEventListener("load", function () {
    const ctx = document.getElementById("grafikTrend");
    if (ctx) {
        new Chart(ctx, {
            type: "bar",
            data: {
                labels: [
                    "Jan",
                    "Feb",
                    "Mar",
                    "April",
                    "Mei",
                    "Juni",
                    "Juli",
                    "Agustus",
                    "September",
                    "Oktober",
                    "November",
                    "Desember",
                ],
                datasets: [
                    {
                        label: "Penjualan",
                        data: [12, 19, 3],
                        backgroundColor: ["#ff0000"],
                        borderRadius: 5,
                    },
                ],
            },
            options: {
                responsive: true,
                scales: {
                    y: {
                        beginAtZero: true,
                    },
                },
            },
        });
    } else {
        console.warn("grafikTrend not found");
    }
});
// console.log("Dashboard JS loaded");
