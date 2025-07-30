export class Scroller {
    constructor() {
        this.scroller = document.querySelector("#scroller");
        this.lastPosition = 0;
        this.state = "initial";
    }

    initScroller = () => {
        window.addEventListener("scroll", () => {
            switch (this.state) {
                case "initial":
                    if (window.scrollY > 200) {
                        this.showScroller();
                        this.state = "toTop";
                    }
                    break;
                case "toTop":
                    if (window.scrollY <= 200) {
                        this.hideScroller();
                        this.state = "initial";
                    }
                    break;
                case "toLastPosition":
                    if (window.scrollY > 200) {
                        this.state = "toTopLittle";
                        this.scroller.classList.remove("scroller_down");
                    }
                    break;
                case "toTopLittle":
                    if (window.scrollY > 500) {
                        this.state = "toTop";
                    }
                    if (window.scrollY <= 200) {
                        this.state = "toLastPosition";
                        this.scroller.classList.add("scroller_down");
                    }
                    break;
                default:
                    console.error("Unknown state");
            }
        });

        this.scroller.addEventListener("click", () => {
            switch (this.state) {
                case "toTop":
                    this.state = "toLastPosition";
                    this.scrollTop();
                    this.scroller.classList.add("scroller_down");
                    break;

                case "toTopLittle":
                    this.state = "toLastPosition";
                    this.scrollTop();
                    this.scroller.classList.add("scroller_down");
                    break;

                case "toLastPosition":
                    this.scrollLastPosition();
                    this.scroller.classList.remove("scroller_down");
                    this.state = "toTop";
                    break;
                default:
                    console.error("Unknown state");
            }
        });
    };

    showScroller = () => {
        scroller.classList.remove("animate__rotateOut");
        scroller.classList.add("animate__rotateIn");
    };

    hideScroller = () => {
        scroller.classList.remove("animate__rotateIn");
        scroller.classList.add("animate__rotateOut");
    };

    scrollTop = async () => {
        this.lastPosition = window.scrollY;

        window.scrollTo({
            top: 0,
        });
    };

    scrollLastPosition = () => {
        window.scrollTo({
            top: this.lastPosition,
        });
    };
}
