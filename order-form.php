<?php session_start();
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}
?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 

<!---  ####### Body content begins ####### -->
<div class="box">
           
                <div class="card text-left">
                    <div class="card-header full green">
                        <form action="model/orders-model.php" method="post">
                            <input name="account_id" id="account_id" type="hidden" value="<?php echo $_SESSION['client']['account_id'];?>">
                            <h2> <?php echo $_SESSION['coop']['coop_name'];?> Order Form</h2>
                            <div id="overlay" onchange="dismissOverlay()">
                                <h2 id="overlay-text"></h2>
                                <p><strong># Full Bushels </strong><input type="number" onfocus="targetInput(this)" required onfocusout="targetOutput(this)" name="full-count" id="full-count"
                                        min="0" step="1" >
                                    <!-- Budget data from co-op info. Used for calculations, but hidden from viewer.-->
                                    <input type="hidden" name="full-budget" id="full-budget" value="<?php echo $_SESSION['coop']['coop_full_budget'];?>"></p>
                                <p><strong># Partial Bushels </strong><input type="number" onfocus="targetInput(this)" required onfocusout="targetOutput(this)" name="half-count" id="half-count"
                                        size="10" onchange="orderQuantities()" min="0" step="1" >

                                    <!-- Budget data from co-op info. Used for calculations, but hidden from viewer.-->
                                    <input type="hidden" name="half-budget" id="half-budget" size="10" value="<?php echo $_SESSION['coop']['coop_half_budget'];?>"></p>
                                    <h2 class="btn-primary" id="overlay-click"></h2>
                               
                              
                            </div>
                           
                            <h4>Purchasing Budget:
                                <span id="target-total"></span>
                            </h4> 
                    </div>
                    <div class="card-body">

                        
                       

                        <!-- Items section -->
                        <div class="card item">
                        <div class="card-header brown">
                        <h4 >Item</h4>
</div><div class="card-body">
                        <div>
                            <label>Per Full Bushel:

                            </label>
                        </div>
                        <div>
                            <input type="number" required name="per-full" id="per-full" onchange="orderQuantities()" min="0" step="1">
                        </div>

                        <div>
                            <label>Per Partial Bushel:

                            </label>
                        </div>
                        <div>
                            <input type="number" required name="per-half" id="per-half" onchange="orderQuantities()" min="0" step="1">
                        </div>
                        <div>
                            <label>Item Name:
                            </label>
                        </div>

                        <div>
                            <select required name="item-name" id="item-name">

                                <option value="Apples">Apples</option>
                                <option value="Bananas">Bananas</option>
                                <option value="Potatoes">Potatoes</option>
                                <option value="Onions">Onions</option>
                                <option value="Tomatoes">Tomatoes</option>
                                <option value="Lettuce">Lettuce</option>
                                <option value="Cucumber">Cucumber</option>
                                <option value="Carrots">Carrots</option>
                                <option value="Pears">Pears</option>
                                <option value="Tangerines">Tangerines</option>
                                <option value="Plums">Plums</option>
                            </select>
                        </div>
                        <div>
                            <label># In Box:

                            </label>
                        </div>
                        <div>
                            <input type="number" required name="item-count" id="item-count" onchange="orderQuantities()" min="0" step="1">
                        </div>

                        <div>
                            <input type="hidden" required name="item-unit" id="item-unit" value="count">
                        </div>
                        <div>
                            <label>Box Price:

                            </label>
                        </div>
                        <div>
                            <input type="number" name="item-price" required id="item-price" placeholder="$0.00" onchange="orderQuantities()" min="0" step=".5">
                        </div>
                        <p><strong>Quantity:</strong> <span id="item-quantity-display" onchange="orderQuantities()"></span></p>
                            <input type="hidden" name="item-quantity" id="item-quantity" onchange="orderQuantities()">


                       
                      
                            <p><strong>Item Total:</strong> <span id="item-total-display" onchange="orderQuantities()"></span></p>
                            <input type="hidden" name="item-total" id="item-total" onchange="orderQuantities()">
</div>
</div>
                        
                    
                           
                     
                        
                        <hr/>
                        <div class="card-footer">
                            <div>
                           
                                <h2>Order Total: <span id="grand-total-display" onchange="orderQuantities()"></span></h2>
                                <input type="hidden" readonly step=".01" name="grand-total" id="grand-total" onchange="orderQuantities()">
                                <h4>
                                <span id="over-under"></span>
                            </h4>
                            </div>
                            
                        </div>
        

                        <p><strong>Pickup Date:</strong>
                           
                        
                            <input type="date" name="order-date" required id="order-date" >
                        </p>
                        <div>

                            <input type="submit" name="submit"  value="Submit" class="btn btn-primary">
                            </form>
                        </div>

                        </form>
                    </div>
                </div>
           
        </div>


       
 <script src ="/scripts/functions.js"></script>
 <script src ="/scripts/order-form.js"></script>
 <script src ="/scripts/order-quantities.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 