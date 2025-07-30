class SpecialOffer {
    constructor() {
        this.day = new Date().getDate();
        this.month = new Date().getMonth();
        this.year = new Date().getFullYear();

        this.monthList = [
            "января",
            "февраля",
            "марта",
            "апреля",
            "мая",
            "июня",
            "июля",
            "августа",
            "сентября",
            "октября",
            "ноября",
            "декабря",
        ];
    }

    getTextMonth() {
        return this.monthList[this.month];
    }

    addZero(number) {
        if (number < 10) {
            return `0${number}`;
        }

        return number;
    }

    getDeadline() {
        if (this.day < 15) {
            /* return `15-${this.addZero(this.month + 1)}-${this.year}T00:00:00`; */
            return {
                day: 15,
                month: this.month,
                year: this.year,
            };
        }

        /* return `01-${this.addZero(this.month + 2)}-${this.year}T00:00:00`; */
        return {
            day: 1,
            month: this.month === 11 ? 0 : this.month + 1,
            year: this.month === 11 ? this.year + 1 : this.year,
        };
    }

    getPromoDate() {
        const { day, month, year } = this.getDeadline();
        const textMonth = this.getTextMonth();

        if (day === 15) {
            return `15 ${textMonth} ${year}`; // 15 текущего месяца текущего года
        }

        if (this.month === 11) {
            const lastDayInMonth = 32 - new Date(year - 1, 11, 32).getDate();

            return `${lastDayInMonth} ${textMonth} ${year - 1}`; // 31 декабря текущего года
        }

        const lastDayInMonth = 32 - new Date(year, month - 1, 32).getDate();

        return `${lastDayInMonth} ${textMonth} ${year}`; // 31 текущего месяца текущего года
    }

    getSpecialOfferDate() {
        const { day, month, year } = this.getDeadline();

        if (day === 15) {
            return `15.${this.addZero(month + 1)}.${year}`;
        }

        if (month === 0) {
            const lastDayInMonth = 32 - new Date(year - 1, 11, 32).getDate();

            return `${lastDayInMonth}.${this.addZero(12)}.${year - 1}`;
        }

        const lastDayInMonth = 32 - new Date(year, month - 1, 32).getDate();

        return `${lastDayInMonth}.${this.addZero(month)}.${year}`;
    }

    getSeason() {
        const month = this.month;

        if (month >= 11 || month < 2) {
            return "Зима";
        } else if (month >= 2 && month < 5) {
            return "Весна";
        } else if (month >= 5 && month < 8) {
            return "Лето";
        } else {
            return "Осень";
        }
    }
}

export default SpecialOffer;
