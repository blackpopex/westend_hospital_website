//chan
rson_payment = document.getElementById("payment-for");
payment_amount = document.getElementById("amount");

function inputAmount() {
  if (rson_payment.value == "Ante-natal Registration") {
    payment_amount.value = 25000;
  } else if (rson_payment.value == "Cardiology Consultation") {
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Cardiology Revisit") {
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Dermatology Consultation") {
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Dermatology Revisit") {
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Endocrinology Consultation") {
    payment_amount.value = 20000;
  } else if (rson_payment.value == "Endocrinology Revisit") {
    payment_amount.value = 15000;
  } else if (rson_payment.value == "ENT Consultation") {
    payment_amount.value = 7500;
  } else if (rson_payment.value == "General Consultation") {
    payment_amount.value = 1000;
  } else if (rson_payment.value == "Gynaecology Consultation") {
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Gynaecology Revisit") {
    payment_amount.value = 7500;
  } else if (rson_payment.value == "Gastroenterology Consultation") {
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Gastroenterologist Review") {
    payment_amount.value = 15000;
  } else if (rson_payment.value == "General Surgeon Consultation") {
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Haematology Consultation") {
    payment_amount.value = 30000;
  } else if (rson_payment.value == "Neurology Consultation") {
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Neurology Revisit") {
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Neurosurgery Consultation") {
    payment_amount.value = 50000;
  } else if (rson_payment.value == "Neurosurgery Revisit") {
    payment_amount.value = 40000;
  } else if (rson_payment.value == "Nephrology Consultation") {
    payment_amount.value = 15000;
  } else if (rson_payment.value == "Nephrology Revisit") {
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Orthopadic Consultation") {
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Paediatrics Consultation") {
    payment_amount.value = 30000;
  } else if (rson_payment.value == "Pulmonology Consultation") {
    payment_amount.value = 30000;
  } else if (rson_payment.value == "Urology Consultation") {
    payment_amount.value = 12000;
  } else if (rson_payment.value == "Urology Revisit") {
    payment_amount.value = 10000;
  } else if (rson_payment.value == "Others") {
    //add code here to allow users to enter name of service to pay for and also activate the input field for values of amount to be entered

    var listedItems = document.getElementsByClassName("select_list");
    var i;

    for (i = 0; i < listedItems.length; i++) {
      if (
        listedItems[i].classList.contains("name") &&
        listedItems[i].hasAttribute("name")
      ) {
        document
          .getElementById("openWhenOthersIsClicked")
          .classList.add("set-show");
        document.getElementById("enterAmount").innerHTML =
          "Enter Amount to pay (NGN):";
        document.getElementById("amount").removeAttribute("disabled");
        payment_amount.value = "";
      } else {
        document
          .getElementById("openWhenOthersIsClicked")
          .classList.remove("set-show");
        document.getElementById("enterAmount").innerHTML =
          " Amount to pay (NGN):";
        document.getElementById("amount").setAttribute("name", "disabled");
      }
    }
  } else if (rson_payment.value == "") {
    payment_amount.value = 0000;
  }
}
