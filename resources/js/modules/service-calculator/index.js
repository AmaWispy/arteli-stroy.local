import { initCalculator } from "./calculator";
import { initSquareCounting } from "./range";
import { initWorkTypes } from "./work-types";

export const initServiceCalculator = () => {
    initWorkTypes();
    initSquareCounting();
    initCalculator();
};
