class WidthObserver {
    constructor() {
        this.currentWidth = this.getClientWidth();
        this.callbacks = new Set();
        this.setupResizeListener();
    }

    // Get current client width
    getClientWidth() {
        return document.documentElement.clientWidth || window.innerWidth;
    }

    // Setup resize event listener
    setupResizeListener() {
        let resizeTimeout;

        const handleResize = () => {
            // Debounce to improve performance
            clearTimeout(resizeTimeout);
            resizeTimeout = setTimeout(() => {
                const newWidth = this.getClientWidth();

                if (newWidth !== this.currentWidth) {
                    const oldWidth = this.currentWidth;
                    this.currentWidth = newWidth;

                    // Notify all registered callbacks
                    this.callbacks.forEach((callback) => {
                        callback(newWidth, oldWidth);
                    });
                }
            }, 100);
        };

        window.addEventListener("resize", handleResize);

        // Store the cleanup function
        this.cleanup = () => {
            window.removeEventListener("resize", handleResize);
            clearTimeout(resizeTimeout);
        };
    }

    // Register a callback for width changes
    onWidthChange(callback) {
        if (typeof callback === "function") {
            this.callbacks.add(callback);
        }
        return this; // Allow method chaining
    }

    // Remove a callback
    offWidthChange(callback) {
        this.callbacks.delete(callback);
        return this; // Allow method chaining
    }

    // Clean up when done
    destroy() {
        this.cleanup();
        this.callbacks.clear();
    }
}

// Usage example:
// const widthObserver = new WidthObserver();
// widthObserver.onWidthChange((newWidth, oldWidth) => {
//   console.log(Width changed from ${oldWidth} to ${newWidth});
// });
// console.log('Current width:', widthObserver.getClientWidth());
// When done: widthObserver.destroy();

export const widthObserver = new WidthObserver();
