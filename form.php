<div class="form-container">
    <form action="mailto:gfillipo@uci.edu" method="post" enctype="text/plain" novalidate>
        <h2 id="title" style="text-align: center">Order Form</h2>
        <p style="text-align: center">Required fields are followed by <strong><abbr title="required">*</abbr></strong>.</p>
        <section class="contact">
            <h2>Contact Information</h2>
            <p>
                <label for="firstname">
                    <span>First Name: </span>
                    <strong><abbr title="required">*</abbr></strong>
                    <input type="text" id="firstname" name="firstname">
                    <div class="error" id="firstNameError"></div>
                </label>
            </p>
            <p>
                <label for="lastname">
                    <span>Last Name: </span>
                    <strong><abbr title="required">*</abbr></strong>
                    <input type="text" id="lastname" name="lastname">
                    <div class="error" id="lastNameError"></div>
                </label>
            </p>
            <p>
                <label for="email">
                    <span>Email: </span>
                    <strong><abbr title="required">*</abbr></strong>
                    <input type="email" id="email" name="email">
                    <div class="error" id="emailError"></div>
                </label>
            </p>
            <p>
                <label for="phonenumber">
                    <span>Phone Number: </span>
                    <input type="text" id="phonenumber" name="phonenumber" placeholder="###-###-####">
                    <div class="error" id="phoneError"></div>
                </label>
            </p>
        </section>
        <section class="shipping">
            <h2>Shipping Information</h2>
            <p>
                <span>Product: </span>
                <select name="product">
                    <option value="coffee-bean" selected>Bean Coffee Company Coffee</option>
                    <option value="coffee-hawaiian">Maui Mokka Natural Coffee</option>
                    <option value="coffee-kartel">Koffee Cartel Coffee</option>
                    <option value="coffee-real">Real Good Coffee</option>
                    <option value="mug-cool">AANDERSSON Mug</option>
                    <option value="mug-donut">Donut Mug</option>
                    <option value="mug-elephant">Elephant Mug</option>
                    <option value="mug-green">Ceramic Enamel Mug</option>
                    <option value="maker-virtuoplus">Nespresso VertuoPlus Maker</option>
                    <option value="maker-kitchenaid">KitchenAid Coffee Brewer</option>
                    <option value="maker-nespresso">Nespresso Lattissima</option>
                    <option value="maker-williams">Williams Sonoma Signature Brewer</option>
                </select>
            </p>
            <p>
                <label for="quantity">
                    <span>Quantity: </span>
                    <input type="number" id="quantity" name="quantity">
                    <div class="error" id="quantityError"></div>
                </label>
            </p>
            <p>
                <span>Shipping Method: </span>
                <select name="product">
                    <option value="shipping-standard" selected>Standard Shipping</option>
                    <option value="shipping-express">Express Shipping</option>
                    <option value="shipping-2day">2-Day Shipping</option>
                    <option value="shipping-overnight">Overnight Shipping</option>
                </select>
            </p>
            <p>
                <label for="Address">
                    <span>Address: </span>
                    <input type="text" id="address" name="address">
                    <div class="error" id="addressError"></div>
                </label>
            </p>
            <p>
                <label for="city">
                    <span>City: </span>
                    <input type="text" id="city" name="city">
                    <div class="error" id="cityError"></div>
                </label>
                <label for="state">
                    <span>State/Province: </span>
                    <input type="text" id="state" name="state">
                    <div class="error" id="stateError"></div>
                </label>
            </p>
            <p>
                <label for="zipcode">
                    <span>Zip Code: </span>
                    <input type="number" id="zipcode" name="zipcode">
                    <div class="error" id="zipError"></div>
                </label>
                <label for="country">
                    <span>Country: </span>
                    <input type="text" id="country" name="country">
                    <div class="error" id="countryError"></div>
                </label>
            </p>
        </section>
        <section class="payment">
            <h2>Payment Information</h2>
            <p>
                <label for="cardnumber">
                    <span>Credit Card Number: </span>
                    <input type="number" id="cardnumber" name="cardnumber">
                    <div class="error" id="cardError"></div>
                </label>
            </p>
            <p>
                <label for="cvc">
                    <span>CVC: </span>
                    <input type="number" id="cvc" name="cvc">
                    <div class="error" id="cvcError"></div>
                </label>
                <label for="expdate">
                    <span>Expiration Date: </span>
                    <input type="text" id="expdate" name="expdate" placeholder="mm/yy">
                    <div class="error" id="expError"></div>
                </label>
            </p>
        </section>
        <input name="Submit" id="submit" type="submit" value="Submit" />
    </form>
</div>