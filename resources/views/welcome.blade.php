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

        <details>
            <summary>Personal Loan. What is it?</summary>
            <p>A personal loan is a short to medium term loan that can be useful for financial emergencies. The amount of money loaned is based on the amount of money a person makes. It is perfect for people who have limited access to credit. Many people who request personal loans would not normally be able to obtain loans from a traditional bank.</p>
        </details>

        <details>
            <summary>What are the minimum requirements for submitting a loan request?</summary>
            <p>There are certain requirements one has to fulfill in order to submit a request for a personal loan. Borrower must:
            <ul>
                <li>be a United States Citizen or permanent resident</li>
                <li>be at least 18 years old</li>
                <li>have a job/income</li>
                <li>have direct deposit to a bank account</li>
            </ul>
        </details>

        <details>
            <summary>What is the process of getting a personal loan?</summary>
            <p>Getting a personal loan is generally simple and straightforward. Most people get funds deposited directly into their account upon approval. Sometimes lenders may ask for additional information but generally the entire process is online.</p>
        </details>

        <details>
            <summary>What if I have a less than perfect credit history?</summary>
            <p>Even people with less than perfect credit history can be eligible for a personal loan. Many people who would not get the chance from a traditional bank, can get a loan as quickly as the next business day.</p>
        </details>

        <details>
            <summary>Will I need to print or fax anything?</summary>
            <p>Part of the advantage of these loans is that most of the participating lenders require no papers to be printed or faxed in order to request a loan. However, it is important that you have a printer to print out the loan documents for your own records unless you are able to save them as digital files.</p>
        </details>

        <details>
            <summary>How much will a personal loan cost me?</summary>
            <p>Please remember that we are not a lender and we do not provide lending services directly to consumers. Submitting your registration through us incurs absolutely no cost. We are paid by the Participating Lenders or network of Participating Lenders to whom we referred you for each potential customer referral. Even if you turn down the loan or exit the process at any time, our service remains FREE of charge to you. Please check the loan agreement presented to you by the lender you are matched with and be sure to speak with the lender’s customer service to get all of your questions answered BEFORE signing the loan agreement. Once you have signed the loan agreement you have entered a binding contract and will be responsible for paying back the loan at the agreed APR.</p>
        </details>

        <details>
            <summary>What is the repayment process?</summary>
            <p>The loan amount and loan fees are withdrawn from your checking account automatically on the due date(s) of your loan by The Lender. Some lenders allow for extensions but many do not so be sure to read and be clear on all terms of the loan before signing the contract.</p>
        </details>

        <details>
            <summary>What happens if I am late on a payment or need to skip a payment?</summary>
            <p>Each Participating Lenders has their own policies pertaining to late payments. The Participating Lender's policy, including the additional charges you will incur, is detailed in the loan documents provided to you by your Participating Lender before you are requested to sign the loan agreement. Once you have signed the Participating Lenders loan documents, you will be expected to understand and abide by the loan terms including the additional charges and/or interest if your repayment is late. If you are not able to make the payments timely, please contact your Participating Lending as soon as you are aware the loan will be late and work with them,but remember additional fees and interest may apply.</p>
        </details>

        <details>
            <summary>What if I don't make a payment at all?</summary>
            <p>Additional fees, and charges by The Lender may apply to you in the event that you do not repay your loan. Please remember that refusal or failure to pay may result in legal action against you by The Lender in an attempt to collect the loan amount, interest and costs of collections. It. Failure to repay a loan will have a negative impact on your credit score and likely make it more difficult for you to access credit in the future.</p>
        </details>

        <details>
            <summary>Is there an option to refinance an existing loan?</summary>
            <p>Loan renewal policies are largely governed by State statute. In states where rollovers or extensions are allowed, interest rates, and late fees may be added to the original loan amount and that can result in a substantial increase to the amount you will be required to payback. Again, be sure to read the Participating Lenders loan terms in carefully and thoroughly before signing the initial loan contract.</p>
        </details>
    </section>

<section class="to-consider">
    <div class="wrapper-to-consider">
        <h4>Important Points to Consider</h4>
        <p>SITE is only partnered with professional lenders who provide potential borrowers with sufficiently detailed information concerning loan terms and conditions prior to their accepting any personal loan offer. We recommend that you closely view the terms of any loan offer you get. To get more details on these considerations you can view the Lending Policy and Rates & Fees sections of our website
        </p>

        <h4>Financial Implications (Interest and Finance Charges)</h4>
        <p>Interest rates and fees vary by lender. Please read and understand all terms of the loan before you sign. If you have any questions, be sure to contact the lender before signing and know that you are under no obligation to agree to the loan terms or sign.
        </p>

        <h4>Implications of Non-Payment</h4>
        <p>By accepting the terms of a loan offer, you are agreeing to make on-time payments as laid out in the loan agreement until the loan and interest is fully paid. If you are struggling to make the payments on time, please contact the lender so they can help you work out a payment plan and/or explain to you the penalty fees associated with late payments. These will vary by lender and should be explained in the loan terms. Lenders in our network follow Fair Debt Collection Practices but please be aware that late and non-payments may not only cost you more money but could have an impact on your credit score.
        </p>

        <h4>Loan Renewal Policies</h4>
        <p>
            Renewal policies vary by lender, if you wish to renew your loan it is suggested that you contact your lender in advance.
        </p>
    </div>
</section>

<footer>
    <div class="wrapper-footer">
        <div class="address">

            <div class="brand">
                <h2>site.com</h2>
                <p>© 2024. All rights reserved.</p>
            </div>

            <div class="contact">
                <p>3651 Lindell Road Suite D1137 Las Vegas, <br> NV 89103 United States</p>
                <p>1-888-361-4522</p>
                <p>contact@lend-afriend.com</p>
            </div>
        </div>

        <div class="footer-links">
            <ul>
                <li><a href="#">Marketing Disclosure</a></li>
                <li><a href="#">Ad Disclosure</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Rates & Fees</a></li>
                <li><a href="#">E-Consent</a></li>
            </ul>

            <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a href="#">Do not sell my info</a></li>
                <li><a href="#">Subscribe</a></li>
                <li><a href="#">Unsubscribe</a></li>
            </ul>
        </div>
    </div>
</footer>




















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
