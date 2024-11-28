document.addEventListener("DOMContentLoaded", function () {
    const searchToggle = document.getElementById("search-toggle");
    const searchContainer = document.getElementById("search-container");
    const searchInput = document.getElementById("search-input");
    const searchButton = document.getElementById("search-btn");
    const prevButton = document.getElementById("prev-result");
    const nextButton = document.getElementById("next-result");
    const content = document.querySelector("main#content");

    let currentIndex = -1;
    let highlights = [];

    // Toggle Search Form
    searchToggle.addEventListener("click", function () {
        searchContainer.classList.toggle("d-none");
    });

    // Highlight Matching Text
    const highlightText = (searchText) => {
        // Clear previous highlights
        const clearHighlights = () => {
            highlights.forEach((highlight) => {
                const parent = highlight.parentNode;
                parent.replaceChild(document.createTextNode(highlight.textContent), highlight);
            });
            highlights = [];
        };

        clearHighlights();

        if (!searchText) return;

        const regex = new RegExp(`(${searchText})`, "gi");
        const highlightMatches = (node) => {
            if (node.nodeType === Node.TEXT_NODE) {
                const text = node.nodeValue;
                if (regex.test(text)) {
                    const fragment = document.createDocumentFragment();
                    text.split(regex).forEach((part) => {
                        if (regex.test(part)) {
                            const span = document.createElement("span");
                            span.className = "highlight";
                            span.textContent = part;
                            fragment.appendChild(span);
                            highlights.push(span);
                        } else {
                            fragment.appendChild(document.createTextNode(part));
                        }
                    });
                    node.replaceWith(fragment);
                }
            } else if (node.nodeType === Node.ELEMENT_NODE && !["SCRIPT", "STYLE"].includes(node.tagName)) {
                node.childNodes.forEach(highlightMatches);
            }
        };

        content.childNodes.forEach(highlightMatches);
    };

    // Scroll to Highlight
    const scrollToHighlight = (index) => {
        if (highlights.length === 0 || index < 0 || index >= highlights.length) return;
        highlights[index].scrollIntoView({ behavior: "smooth", block: "center" });
        highlights.forEach((el, idx) => {
            el.style.border = idx === index ? "2px solid blue" : "none";
        });
    };

    // Search Button Click
    searchButton.addEventListener("click", function () {
        const searchText = searchInput.value.trim();
        highlightText(searchText);
        if (highlights.length > 0) {
            currentIndex = 0;
            scrollToHighlight(currentIndex);
        }
    });

    // Enter Key for Search
    searchInput.addEventListener("keypress", function (e) {
        if (e.key === "Enter") {
            e.preventDefault();
            searchButton.click();
        }
    });

    // Navigate Results
    prevButton.addEventListener("click", function () {
        if (highlights.length > 0) {
            currentIndex = (currentIndex - 1 + highlights.length) % highlights.length;
            scrollToHighlight(currentIndex);
        }
    });

    nextButton.addEventListener("click", function () {
        if (highlights.length > 0) {
            currentIndex = (currentIndex + 1) % highlights.length;
            scrollToHighlight(currentIndex);
        }
    });
});
