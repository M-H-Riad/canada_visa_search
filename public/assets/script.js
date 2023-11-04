// import('/lib/SecureTrading/library.js')
import('public/assets/library.js')
.then(() => {
    $(document).ready(function () {
        (function () {
            var newToken = '0';

            document.getElementById('submitbtn').addEventListener('click', function (event) {
                event.preventDefault();
                if ($('#PaymentDetailsForm').validate().checkForm()) {

                    var url = 'UpdateToken';
                    var ajaxRequest = {
                        amount: $("#Amount").val(),
                        currency: 'GBP',
                        pan: $("#CardNumber").val(),
                        expiryDate: $("#ExpiryMonth").val() + $("#ExpiryYear").val(),
                        securityCode: $("#Cvc").val()
                    };
                    var done = false;
                    var isSuccess = false;
                    $.ajax({
                        url: url,
                        type: "POST",
                        async: false,
                        data: { ajaxRequest: JSON.stringify(ajaxRequest) },
                        error: function (data) {
                            done = true;
                        },
                        success: function (data) {
                            newToken = data.newJwt
                            getPartialCard(newToken);
                            isSuccess = true;
                            done = true;
                        }
                    });

                    while (!done) {
                        setTimeout(function () { }, 500);
                    }

                    if (isSuccess) {
                        $("#NewJWTSavedContainer").val(newToken);
                    } else {
                        //st.updateJWT(0);
                    }
                }
                else {
                    event.preventDefault();
				}
            });


            function getPartialCard(newToken) {
                $.ajax({
                    url: 'GetSecureCardFlow',
                    type: "GET",
                    async: false,
                    data: { "jwt" : newToken },
                    error: function (data) {
                        console.log("Failed to recieve new token");
                        done = true;
                    },
                    success: function (data) {
                        $("#securePaymentCardFlow").html(data);
                    }
                });
            }
        })();

        // display none
        var useAvs = false;

        if (useAvs) {
            $("#avsRow").removeClass("noAvs");
        }
    });
});