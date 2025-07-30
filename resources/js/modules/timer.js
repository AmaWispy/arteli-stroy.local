import SpecialOffer from "./specialOffer";

const timer = () => {
    const addZero = (num) => {
        if (num >= 0 && num < 10) {
            return `0${num}`;
        } else {
            return num;
        }
    };

    const specialOffer = new SpecialOffer();
    const { day, month, year } = specialOffer.getDeadline();

    const endtime = `${year}-${addZero(month + 1)}-${addZero(day)}T00:00:00`;

    function calcDeadline(endtime) {
        let days, hours, minutes, seconds;
        const t = Date.parse(endtime) - Date.parse(new Date());

        if (t <= 0) {
            days = 0;
            hours = 0;
            minutes = 0;
            seconds = 0;
        } else {
            days = Math.floor(t / (1000 * 60 * 60 * 24));
            hours = Math.floor((t / (1000 * 60 * 60)) % 24);
            minutes = Math.floor((t / (1000 * 60)) % 60);
            seconds = Math.floor((t / 1000) % 60);
        }

        return {
            total: t,
            days,
            hours,
            minutes,
            seconds,
        };
    }

    function setClock(selector, endtime) {
        const timer = document.querySelector(selector),
            days = timer.querySelectorAll(".days"),
            hours = timer.querySelectorAll(".hours"),
            minutes = timer.querySelectorAll(".minutes"),
            seconds = timer.querySelectorAll(".seconds");

        const clockInterval = setInterval(updateClock, 1000);

        updateClock();

        function updateClock() {
            const t = calcDeadline(endtime);
            days.forEach((item) => {
                item.innerHTML = addZero(t.days);
            });
            hours.forEach((item) => {
                item.innerHTML = addZero(t.hours);
            });
            minutes.forEach((item) => {
                item.innerHTML = addZero(t.minutes);
            });
            seconds.forEach((item) => {
                item.innerHTML = addZero(t.seconds);
            });

            if (t.total <= 0) {
                clearInterval(clockInterval);
            }
        }
    }

    setClock(".timer", endtime);
};

export default timer;
