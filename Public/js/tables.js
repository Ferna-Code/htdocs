class Datatable{

    element;
    headers;
    items;
    copyItems;
    selected;
    pagination;
    numberOfEntries;
    headerButtons;

    constructor(selector,headerButtons){
        this.element = document.querySelector(selector);

        this.headers = [];
        this.items = [];
        this.pagination = {
            total: 0,
            noItemsPerPages: 0, 
            noPages: 0, 
            actual: 0,
            pointer: 0,
            diff: 0,
            lastPagesBeforeDots: 0,
            noButtonsBeforeDots: 4
        };

        this.selected = [];
        this.numberOfEntries =  5;
        this.headerButtons = headerButtons;
    }

    parse(){
        const headers = [... this.element.querySelector('thead tr').children];
        const trs = [... this.element.querySelector('tbody').children];

        headers.forEach(element =>{
            this.headers.push(element.textContent);

        });
    }
}
