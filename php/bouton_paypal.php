<div class="center">
    <button type="button" data-toggle="modal" data-target="#myModal">Achetez maintenant</button>
</div>

<!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModalCenter">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                ...
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
    </div>
</div>





<!-- 
<div id="smart-button-container">
    <div style="text-align: center;">
        <div id="paypal-button-container"></div>
    </div>
</div>
<script src="https://www.paypal.com/sdk/js?client-id=sb&currency=EUR" data-sdk-integration-source="button-factory"></script>
<script>
    function initPayPalButton() {
        paypal.Buttons({
            style: {
                shape: 'pill',
                color: 'black',
                layout: 'vertical',
                label: 'buynow',

            },

            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        "amount": {
                            "currency_code": "EUR",
                            "value": 1
                        }
                    }]
                });
            },

            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            },

            onError: function(err) {
                console.log(err);
            }
        }).render('#paypal-button-container');
    }
    initPayPalButton();
</script> -->