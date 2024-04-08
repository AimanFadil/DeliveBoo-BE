const ctx = document.getElementById('myChart');
let id_rest = ctx.getAttribute('data-rest')
let orders = []
axios.get(`http://127.0.0.1:8000/api/orders/${id_rest}`).then((response) => {
    orders = response.data.results

})

new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['Gennaio', 'Febbraio', 'Marzo', 'Aprile', 'Maggio', 'Giugno', 'Luglio', 'Agosto', 'Settembre', 'Ottobre', 'Novembre', 'Dicembre'],
        datasets: [{
            label: '# of Votes',
            data: [order_mese.price],
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});