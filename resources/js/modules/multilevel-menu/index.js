import { expandSecondLayer } from "./expand-second-layer";
import { setupMenuTabs } from "./menu-tabs";
import { toggleMenu } from "./toggle-menu";

export const setupMultilevelMenu = () => {
    try {
        setupMenuTabs();
        expandSecondLayer();
        toggleMenu();
    } catch (err) {
        console.log(err);
    }
};

export { TAB_BTN_CLASS, hideAll } from "./menu-tabs";
