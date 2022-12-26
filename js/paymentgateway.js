//CODE FOR PAYMENT GATEWAY
rson_payment = document.getElementById("payment-for");
payment_amount = document.getElementById("amount");
payment_amount.value = 0000;

function inputAmount() {
  //Code for resetting input fields when a new service is selected if not Other
  document
    .getElementById("openWhenOthersIsClicked")
    .classList.remove("set-show");
  document.getElementById("enterAmount").innerHTML = "Amount to pay (NGN):";
  document.getElementById("amount").setAttribute("disabled", "");

  if (rson_payment.value == "Ante-natal Registration") {
    //Amount to pay when service is selected
    payment_amount.value = 25000;
  } else if (rson_payment.value == "Cardiology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Cardiology Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Dermatology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Dermatology Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Endocrinology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 20000;
  } else if (rson_payment.value == "Endocrinology Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 15000;
  } else if (rson_payment.value == "ENT Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 7500;
  } else if (rson_payment.value == "General Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 1000;
  } else if (rson_payment.value == "Gynaecology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Gynaecology Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 7500;
  } else if (rson_payment.value == "Gastroenterology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Gastroenterologist Review") {
    //Amount to pay when service is selected
    payment_amount.value = 15000;
  } else if (rson_payment.value == "General Surgeon Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Haematology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 30000;
  } else if (rson_payment.value == "Neurology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Neurology Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Neurosurgery Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 50000;
  } else if (rson_payment.value == "Neurosurgery Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 40000;
  } else if (rson_payment.value == "Nephrology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Nephrology Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Orthopadic Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Paediatrics Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 30000;
  } else if (rson_payment.value == "Pulmonology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 30000;
  } else if (rson_payment.value == "Urology Consultation") {
    //Amount to pay when service is selected
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Urology Revisit") {
    //Amount to pay when service is selected
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Others") {
    //add code here to allow users to enter name of service to pay for and also activate the input field for values of amount to be entered
    var listedItems = document.getElementsByClassName("select_list");
    var i;

    for (i = 0; i < listedItems.length; i++) {
      if (listedItems[i].hasAttribute("name")) {
        //Adds a new input field and enable user to input service to pay for
        document
          .getElementById("openWhenOthersIsClicked")
          .classList.add("set-show");
        //Change label from Amout to pay to Enter Amount to pay
        document.getElementById("enterAmount").innerHTML =
          "Enter Amount to pay (NGN):";
        //Remove disabled attribute and allow user to enter amout to pay
        document.getElementById("amount").removeAttribute("disabled");
        payment_amount.value = "";
      }
    }
  }
}
