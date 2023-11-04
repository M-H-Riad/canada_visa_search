$(function() {
    const forms = $($("form")[$("form").length - 1]).attr("id");

    clearClass();

    switch (forms) {
    case "ConfirmationForm":
    {
        $("#ConfirmationDetails-step").addClass("active");
        $("#PaymentAmount-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentDetails-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentConfirmation-step").addClass("btn stepwizard-step-disabled");
        break;
    }
    case "PaymentAmountForm":
    {
        $("#PaymentAmount-step").addClass("active");
        $("#ConfirmationDetails-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentDetails-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentConfirmation-step").addClass("btn stepwizard-step-disabled");
        break;
    }
    case "PaymentDetailsForm":
    {
        $("#PaymentDetails-step").addClass("active");
        $("#ConfirmationDetails-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentAmount-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentConfirmation-step").addClass("btn stepwizard-step-disabled");
        break;
    }
    case "PaymentConfirmationForm":
    {
        $("#PaymentConfirmation-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentDetails-step").addClass("btn stepwizard-step-disabled");
        $("#ConfirmationDetails-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentAmount-step").addClass("btn stepwizard-step-disabled");
        break;
    }
    default:
    {
        $("#PaymentConfirmation-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentDetails-step").addClass("btn stepwizard-step-disabled");
        $("#ConfirmationDetails-step").addClass("btn stepwizard-step-disabled");
        $("#PaymentAmount-step").addClass("btn stepwizard-step-disabled");
        break;
    }
    };
});

function clearClass() {
	$("#ConfirmationDetails-step").removeClass("active");
	$("#PaymentAmount-step").removeClass("active");
	$("#PaymentDetails-step").removeClass("active");
	$("#Confirmation-step").removeClass("active");
}