<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <title>Template 4</title>
</head>
<body>

<section class="header">
    <nav>
        <span>logo</span>
        <div class="menu" id="menu">
            <i class="fa-solid fa-circle-xmark" onclick="hideMenu()"></i>
            <ul>
                <li><a href="#">home</a></li>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">disclosure</a></li>
                <li><a href="#">contact us</a></li>
            </ul>
        </div>
        <i class="fa-solid fa-bars" onclick="showMenu()"></i>
    </nav>

    <div class="banner">
        <h1>Lorem ipsum dolor sit amet</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et iure maxime odit veritatis?
        </p>
        <form action="">
            <div class="input-wrapper">
                <label for="email">email</label>
                <input type="email" id="email">
            </div>
            <div class="input-wrapper">
                <label for="money">how much?</label>
                <input type="number" id="money">
            </div>
            <button>find money now</button>
        </form>
    </div>
</section>

<section class="perks">
    <h1>Getting a loan with us <br> is simple like this:</h1>
    <p>Know why we can get you the bets loan options available!</p>

    <div class="perks-wrap">
        <div class="perk-info">
            <img src="{{asset("img/1.png")}}" alt="">
            <h3>anywhere, anytime</h3>
            <p>Our quick and secure online form is fast and hassle-free. You can fill out our Online Form from the privacy and security of your own home.
            </p>
        </div>

        <div class="perk-info">
            <img src="{{asset("img/2.png")}}" alt="">
            <h3>all credit scores welcome</h3>
            <p>Embrace the opportunity to apply without limitations and experience a seamless process tailored to your unique financial history.
            </p>
        </div>

        <div class="perk-info">
            <img src="{{asset("img/3.png")}}" alt="">
            <h3>fast funding</h3>
            <p>Funds are often deposited in to your account as fast as the next business day if you’re approved.
            </p>
        </div>
    </div>
</section>

<section class="faq">
    <h1>Frequently Asked Questions</h1>
    <div class="question">
        <h3>Personal Loan. What is it?</h3>
        <p>A personal loan is a short to medium term loan that can be useful for financial emergencies. The amount of money loaned is based on the amount of money a person makes. It is perfect for people who have limited access to credit. Many people who request personal loans would not normally be able to obtain loans from a traditional bank.
        </p>
    </div>

    <div class="question">
        <h3>What are the minimum requirements for submitting a loan request?</h3>
        <p>There are certain requirements one has to fulfill in order to submit a request for a personal loan. Borrower must:


            - be a United States Citizen or permanent resident
            - be at least 18 years old
            - have a job/income
            - have direct deposit to a bank account
        </p>
    </div>

    <div class="question">
        <h3>What is the process of getting a personal loan?</h3>
        <p>Getting a personal loan is generally simple and straightforward. Most people get funds deposited directly into their account upon approval. Sometimes lenders may ask for additional information but generally the entire process is online.
        </p>
    </div>

    <div class="question">
        <h3>What if I have a less than perfect credit history?</h3>
        <p>Even people with less than perfect credit history can be eligible for a personal loan. Many people who would not get the chance from a traditional bank, can get a loan as quickly as the next business day.
        </p>
    </div>

    <div class="question">
        <h3>Will I need to print or fax anything?</h3>
        <p>Part of the advantage of these loans is that most of the participating lenders require no papers to be printed or faxed in order to request a loan. However, it is important that you have a printer to print out the loan documents for your own records unless you are able to save them as digital files.
        </p>
    </div>

    <div class="question">
        <h3>How much will a personal loan cost me?</h3>
        <p>Please remember that we are not a lender and we do not provide lending services directly to consumers. Submitting your registration through us incurs absolutely no cost. We are paid by the Participating Lenders or network of Participating Lenders to whom we referred you for each potential customer referral. Even if you turn down the loan or exit the process at any time, our service remains FREE of charge to you. Please check the loan agreement presented to you by the lender you are matched with and be sure to speak with the lender’s customer service to get all of your questions answered BEFORE signing the loan agreement. Once you have signed the loan agreement you have entered a binding contract and will be responsible for paying back the loan at the agreed APR.
        </p>
    </div>

    <div class="question">
        <h3>What is the repayment process?</h3>
        <p>The loan amount and loan fees are withdrawn from your checking account automatically on the due date(s) of your loan by The Lender. Some lenders allow for extensions but many do not so be sure to read and be clear on all terms of the loan before signing the contract.
        </p>
    </div>

    <div class="question">
        <h3>What happens if I am late on a payment or need to skip a payment?</h3>
        <p>Each Participating Lenders has their own policies pertaining to late payments. The Participating Lender's policy, including the additional charges you will incur, is detailed in the loan documents provided to you by your Participating Lender before you are requested to sign the loan agreement. Once you have signed the Participating Lenders loan documents, you will be expected to understand and abide by the loan terms including the additional charges and/or interest if your repayment is late. If you are not able to make the payments timely, please contact your Participating Lending as soon as you are aware the loan will be late and work with them,but remember additional fees and interest may apply.
        </p>
    </div>

    <div class="question">
        <h3>What if I don't make a payment at all?</h3>
        <p>Additional fees, and charges by The Lender may apply to you in the event that you do not repay your loan. Please remember that refusal or failure to pay may result in legal action against you by The Lender in an attempt to collect the loan amount, interest and costs of collections. It. Failure to repay a loan will have a negative impact on your credit score and likely make it more difficult for you to access credit in the future.
        </p>
    </div>

    <div class="question">
        <h3>Is there an option to refinance an existing loan?</h3>
        <p>Loan renewal policies are largely governed by State statute. In states where rollovers or extensions are allowed, interest rates, and late fees may be added to the original loan amount and that can result in a substantial increase to the amount you will be required to payback. Again, be sure to read the Participating Lenders loan terms in carefully and thoroughly before signing the initial loan contract.
        </p>
    </div>

</section>


















<script>
    var menu = document.getElementById("menu")

    function showMenu(){
        menu.style.right = "0";
    }

    function hideMenu(){
        menu.style.right = "-200px";
    }

</script>

</body>
</html>
