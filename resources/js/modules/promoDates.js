import SpecialOffer from "./specialOffer";

const initPromoDates = () => {
    const specialOffer = new SpecialOffer();

    const specialOfferText = document.querySelector("#special-offer");
    const promotionText = document.querySelectorAll('[data-id="promotion"]');

    if (specialOfferText) {
        specialOfferText.textContent = specialOffer.getSpecialOfferDate();
    }

    if (promotionText.length !== 0) {
        promotionText.forEach((item) => {
            item.textContent = specialOffer.getPromoDate();
        });
    }
};

export default initPromoDates;
