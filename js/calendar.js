import { isWeekend } from "./date-helper.js";

(function($) {
    $(function() {
        const calendar = document.querySelector(".app-calendar");
        const newDate = new Date();
        const getDate = newDate.getDate();

        for (let day = 1; day <= 31; day++) {
            const getDayName = (day) => {
                const getYear = newDate.getFullYear();
                const getMonth = newDate.getMonth();

                const date = new Date(Date.UTC(getYear, getMonth, day));

                return new Intl.DateTimeFormat("en-US", { weekday: "short" }).format(
                    date
                );
            };

            const weekend = isWeekend(day);

            let name = "";
            if (day <= 7) {
                const dayName = getDayName(day);
                name = `<div class="name">${dayName}</div>`;
            }

            calendar.insertAdjacentHTML(
                "beforeend",
                `<div class="day ${weekend ? "weekend" : ""}" >${name}${day}</div>`
            );

            calendar.disabled = true;
        }

        document.querySelectorAll(".app-calendar .day").forEach((day) => {
            day.addEventListener("click", (event) => {
                event.currentTarget.classList.toggle("selected");
            });
        });
    });
})(jQuery);