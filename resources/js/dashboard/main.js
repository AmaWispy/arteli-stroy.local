import { initDropdown } from "./dropdown";
import { initEditor } from "./editor";
import { initDeleteModal } from "./modals";
import { initMediaField } from "./media-field";
import { initPriceTable } from "./price-table";
import { initFaq } from "./faq";
import { initTiles } from "./tiles";
import { initPrices } from "./prices";
import { initServiceEditor } from "./editor/service-editor";
import {
    setupCategories,
    setupLinkFilter,
    setupMenuItemDeleting,
    setupMenuTabs,
    setupSortableList,
    setupSecondLevelCreation,
    setupSecondLayerDeletion,
    setupSecondLevelAdding,
} from "./menu";

document.addEventListener("DOMContentLoaded", () => {
    try {
        initDropdown();
    } catch {}

    initDeleteModal();
    initMediaField();
    try {
        initPriceTable();
    } catch (err) {
        console.log(err);
    }

    try {
        initFaq();
    } catch (err) {
        console.log(err);
    }

    try {
        initTiles();
    } catch (err) {
        console.log(err);
    }

    try {
        initPrices();
    } catch (err) {
        console.log(err);
    }

    try {
        initEditor();
    } catch {}

    try {
        initServiceEditor();
    } catch {}

    try {
        setupMenuTabs();
        setupLinkFilter();
        setupCategories();
        setupSortableList();
        setupMenuItemDeleting();
        setupSecondLevelCreation();
        setupSecondLayerDeletion();
        setupSecondLevelAdding();
    } catch {}
});
