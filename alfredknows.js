class AlfredKnowsPriceSlide {
    constructor(elmListPriceSlide, elmTotalNumEmails, elmTotalListPrice) {
        this.slide = elmListPriceSlide;
        this.numE = elmTotalNumEmails;
        this.lstP = elmTotalListPrice;
    }
    roundToTwo(num) {
        return +(Math.round(num + "e+2")  + "e-2");
    }
    setValues() {
        this.numE.value = parseFloat(this.slide.value).toLocaleString('en-US');
        this.lstP.innerHTML = '$' + this.roundToTwo(this.slide.value * this.getPricePerEmail(this.slide.value)).toLocaleString('en-US');
    }
    setValuesOnInputChange() {
        if (this.numE.value === '' || this.numE.value === '0') {
            //this.numE.value = '5,000';
            this.lstP.innerHTML = '$0';
        } else {
            this.slide.value = this.numE.value.split(',').join('');
            this.numE.value = parseFloat(this.numE.value.split(',').join('')).toLocaleString('en-US');
            if (this.getPricePerEmail(this.numE.value.split(',').join('')) === 'call') {
                this.lstP.innerHTML = 'Contact Us';
            } else {
                this.lstP.innerHTML = '$' + this.roundToTwo(this.numE.value.split(',').join('') * this.getPricePerEmail(this.numE.value.split(',').join(''))).toLocaleString('en-US');
            }
        }
    }
    getPricePerEmail(num) {
        if (num >= 1 && num <= 2500) {
            return 0.01;
        } else if (num > 2501 && num <= 100000) {
            return 0.008;
        } else if (num > 100001 && num <= 250000) {
            return 0.006;
        } else if (num > 250001 && num <= 500000) {
            return 0.005;
        } else if (num > 500001 && num <= 1000000) {
            return 0.004;
        } else if (num > 1000000) {
            return 'call'
        }
    }
}
if (!!document.getElementById("emailListPriceSlide")) {
    let alfredKnowsPrice = new AlfredKnowsPriceSlide(
                                                        document.getElementById("emailListPriceSlide"),
                                                        document.getElementById("totalNumEmails"),
                                                        document.getElementById("totalListPrice")
                                                    );
    alfredKnowsPrice.setValues();
    document.getElementById("emailListPriceSlide").oninput = function() {
        alfredKnowsPrice.setValues();
    }
    let timer,
    timeoutVal = 1000;
    const typer = document.getElementById('totalNumEmails');
    typer.addEventListener('keypress', handleKeyPress);
    typer.addEventListener('keyup', handleKeyUp);
    function handleKeyPress(e) {
        window.clearTimeout(timer);
    }
    function handleKeyUp(e) {
        window.clearTimeout(timer); // prevent errant multiple timeouts from being generated
        timer = window.setTimeout(() => {
            alfredKnowsPrice.setValuesOnInputChange();
        }, timeoutVal);
    }
}