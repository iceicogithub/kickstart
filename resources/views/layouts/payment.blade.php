<!DOCTYPE html>
<html>

<head>
    <title> Razorpay Payment Gateway Integration Example </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</head>

<body>

    <html>
<button id="rzp-button1" class="btn btn-outline-dark btn-lg"><i class="fas fa-money-bill"></i> Own Checkout</button>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
{{-- <script>
  var options = {
    "key": "rzp_test_ci8sxj5IUpXRv1", 
    "amount": "1000",
    "currency": "INR",
    "description": "Acme Corp",
    "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
    "prefill":
    {
      "email": "gaurav.kumar@example.com",
      "contact": +919900000000,
    },
    config: {
      display: {
        blocks: {
          utib: { //name for Axis block
            name: "Pay using Axis Bank",
            instruments: [
              {
                method: "card",
                issuers: ["UTIB"]
              },
              {
                method: "netbanking",
                banks: ["UTIB"]
              },
            ]
          },
          other: { //  name for other block
            name: "Other Payment modes",
            instruments: [
                {
              method: 'upi'
            },
              {
                method: "card",
                issuers: ["ICIC"]
              },
              {
                method: 'netbanking'
              }
            ],
          },
        },
       
        sequence: ["block.utib", "block.other" , "block.banks"],
        preferences: {
          show_default_blocks: false // Should Checkout show its default blocks?
        },
      },
    },
    "handler": function (response) {
      alert(response.razorpay_payment_id);
    },
    "modal": {
      "ondismiss": function () {
        if (confirm("Are you sure, you want to close the form?")) {
          txt = "You pressed OK!";
          console.log("Checkout form closed by the user");
        } else {
          txt = "You pressed Cancel!";
          console.log("Complete the Payment")
        }
      }
    }
  };
  var rzp1 = new Razorpay(options);
  document.getElementById('rzp-button1').onclick = function (e) {
    rzp1.open();
    e.preventDefault();
  }
</script> --}}
<script>
    var options = {
      "key": "rzp_test_ci8sxj5IUpXRv1", 
      "amount": "1000000",
      "currency": "INR",
      "description": "Acme Corp",
      "image": "https://s3.amazonaws.com/rzp-mobile/images/rzp.jpg",
      "prefill": {
        "email": "myemail@gmail.com",
        "contact": "+919900000000"
      },
      "theme": {
        "color": "#F37254" // Change this to your desired color
      },
      "config": {
        "display": {
          "blocks": {
            "banks": {
              "name": "All payment methods",
              "instruments": [
                {
                  "method": "upi"
                },
                {
                  "method": "card"
                },
                {
                  "method": "wallet"
                },
                {
                  "method": "netbanking"
                }
              ]
            }
          },
          "sequence": ["block.banks"],
          "preferences": {
            "show_default_blocks": false
          }
        }
      },
      "handler": function (response) {
        alert(response.razorpay_payment_id);
      }, 
      "modal": {
        "ondismiss": function () {
          if (confirm("Are you sure, you want to close the form?")) {
            txt = "You pressed OK!";
            console.log("Checkout form closed by the user");
          } else {
            txt = "You pressed Cancel!";
            console.log("Complete the Payment");
          }
        }
      }
    };
  
    var rzp1 = new Razorpay(options);
  
    document.getElementById('rzp-button1').onclick = function (e) {
      rzp1.open();
      e.preventDefault();
    };
</script>
  
</html>

</body>

</html>
