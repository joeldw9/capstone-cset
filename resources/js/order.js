function pricingView() {
    var e = document.getElementById("serviceType");
    var value = e.value;
    const price = document.createElement("p");
    if (value == 0) {
        const node = document.createTextNode("Please select an option for pricing.");
        price.appendChild(node);
        e.appendChild(price);
        console.log("0");
    }
    if (value == 1) {
        const node = document.createTextNode("Price: $99.99");
        price.appendChild(node);
        e.appendChild(price);
        console.log("1");
    }
    if (value == 2) {
        const node = document.createTextNode("Price: $19.99");
        price.appendChild(node);
        e.appendChild(price);
        console.log("2");
    }
    if (value == 3) {
        const node = document.createTextNode("Price: $29.99");
        price.appendChild(node);
        e.appendChild(price);
        console.log("3");
    }
    if (value == 4) {
        const node = document.createTextNode("Price: $49.99");
        price.appendChild(node);
        e.appendChild(price);
        console.log("4");
    }
}