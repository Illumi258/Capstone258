paypal.Buttons({

    style : {
        color: 'blue',
        shape: 'pill'
    },
    createOrder: function (data, actions) {
        return actions.order.create({
            purchase_units : [{
                amount: {
                    value: '1,800'
					currency: 'PHP'
                }
            }]
        });
    },
    onApprove: function (data, actions) {
        return actions.order.capture().then(function (details) {
            console.log(details)
            window.location.replace("http://localhost/capstone26/success.php")
        })
    },
    onCancel: function (data) {
        window.location.replace("http://localhost/capstone26/Oncancel.php")
    }
}).render('#paypal-payment-button');

