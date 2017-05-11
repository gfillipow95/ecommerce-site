<div class="form-container">
    <form id="order" action="orderProduct.php/" method="post" novalidate>
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
                    <option value="Le Bean (Dark French Roast) Organic Whole Bean Coffee" selected>Bean Coffee Company Coffee</option>
                    <option value="100% Maui Mokka Natural">Maui Mokka Natural Coffee</option>
                    <option value="Premium Arabica Whole Bean Coffee">Koffee Cartel Coffee</option>
                    <option value="Whole Bean Coffee, French Dark Roast">Real Good Coffee</option>
                    <option value="AANDERSSON Shapes Mug">AANDERSSON Mug</option>
                    <option value="Donut Mug">Donut Mug</option>
                    <option value="Elephant Mug">Elephant Mug</option>
                    <option value="Ceramic Enamel Mug">Ceramic Enamel Mug</option>
                    <option value="Nespresso VertuoPlus">Nespresso VertuoPlus Maker</option>
                    <option value="KitchenAid Coffee Brewer">KitchenAid Coffee Brewer</option>
                    <option value="Nespresso Lattissima">Nespresso Lattissima</option>
                    <option value="Williams Sonoma Signature Brewer">Williams Sonoma Signature Brewer</option>
                </select>
            </p>
            <p>
                <span>Quantity: </span>
                <select id="quantity" name="quantity" onchange="addQuantity()">
                    <option value="0"selected></option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </p>
            <p>
                <span>Shipping Method: </span>
                <select id="shippingMethod" name="shippingMethod" onchange="addShipping()">
                    <option value="0" selected>Standard Shipping($0)</option>
                    <option value="4">Express Shipping($4)</option>
                    <option value="10">2-Day Shipping($10)</option>
                    <option value="15">Overnight Shipping($15)</option>
                </select>
            </p>
            <p>
              <label for="zipcode">
                  <span>Zip Code: </span>
                  <input type="number" id="zipcode" name="zipcode" onblur="getPlaceAndTax(this.value)">
                  <div class="error" id="zipError"></div>
              </label>
                <label for="address">
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
                <label for="country">
                    <span>Country: </span>
                    <input type="text" id="country" name="country">
                    <div class="error" id="countryError"></div>
                </label>
            </p>
            <p id="totalCost" data-total="0"><strong id="total">Total Cost: </strong>
            </p>
            <input type="hidden" value="0" name="totalCostInput" id="totalCostInput" />
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
        <input type="hidden" id='id' name="id" value="<?php echo $_GET['id'] ?>" />
        <input type="hidden" id='type' name="type" value="<?php echo $_GET['type'] ?>"/>
        <input name="submit" id="submit" type="submit" value="Submit" />
    </form>
</div>
