function toggleFilter() {
    let filterForm = document.getElementById('filter-form');
    let table = document.getElementById('display-table');

    console.log(filterForm.style);
    if (filterForm.style['display'] !== 'none') {
        filterForm.style['display'] = 'none';
        table.style['flex-grow'] = '1';

    } else {
        filterForm.style['display'] = 'block';
        table.style['flex-grow'] = '0.76';
    }

}