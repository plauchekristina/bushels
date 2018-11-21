<?php session_start();
if (!isset($_SESSION['client'])){
    header('Location:login.php');
}
?>
<?php include($_SERVER["DOCUMENT_ROOT"] . '/common/nav.php');?> 

<!---  ####### Body content begins ####### -->
<div class="container text-center">
<div class="row">
   <div class="col-sm-12 panel panel-default text-left">
        <div class="panel-body">
        <p>You're purchasing food for a food co-op. Some people want full portions and some people want half portions.
        You need to figure how many boxes of apples to purchase for the group.</p> 
        <p>Fill in the fields below to figure out how many boxes you should buy. <span class="alert">* All fields are required.</span>
     </p>
     
     <form action = "model/orders-model.php" method ="post">
        <input name="account_id" id="account_id" type="hidden" value = "<?php echo $_SESSION['client']['account_id'];?>">
     
        <div class="d-inline row">       
        <div class="col-sm-2">
                        <label># People who want a Full Portion:<span class="alert">*</span></label>
                        <div>
                            <input type="number" onfocus="targetInput(this)" required onfocusout="targetOutput(this)" name="full-count" id="full-count" aria-label="enter number of full portions ordered">
                        </div>
                        <!-- Budget data from co-op info. Used for calculations, but hidden from viewer.-->
                        <input type="hidden" name="full-budget" id="full-budget"  value = "<?php echo $_SESSION['coop']['coop_full_budget'];?>">
                    </div>


                    <div class="col-sm-2">
                        <label># People who want a Half Portion:<span class="alert">*</span></label>
                        <div>
                            <input type="number" onfocus="targetInput(this)" required onfocusout="targetOutput(this)" name="half-count" id="half-count" size="10"
                                onchange="orderQuantities()" aria-label="enter number of half portions ordered">
                        </div>
                        <!-- Budget data from co-op info. Used for calculations, but hidden from viewer.-->
                        <input type="hidden" name="half-budget" id="half-budget" size="10" value = "<?php echo $_SESSION['coop']['coop_half_budget'];?>" >
                    </div>
</div>
                    <h3>Purchasing Budget:
                        <span id="target-total"></span>
                    </h3>
    </div>

    </div>


    <!-- Center column -->
    <div class="col-sm-12">
<!-- #### HEADER #####-->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-default text-left">
                    <div class="panel-body">
                        
                        
                                <h3><?php echo $_SESSION['coop']['coop_name'];?> Order</h3>  
                                <div>
                                    <label>Date:<span class="alert">*</span></label>                                           
                                    <input type="text" name="order-date" required id="order-date" value ="<?php echo date("m/d/Y");?>" >
                                </div>
                   
                </div>
            </div>
        </div>
<!-- ####### ORDER FORM BEGINS-->
<div class="panel panel-default">
              
<div class="row">

<div class="col-sm-12">
    <div class="well">
        <div class="thumbnail text-left"> 
                <h4>Item</h4>

              
                <div class="d-inline row">       
        <div class="col-sm-2">
                <label>#Apples Per Full:<span class="alert">*</span></label> 
            <div> 
                <input type="number" required name="per-full" id="per-full" placeholder="#" onchange="orderQuantities()">
            </div>    
        </div>
         <div class="col-sm-2">
                <label>#Apples Per Half:<span class="alert">*</span></label> 
            <div> 
                <input type="number" required name="per-half" id="per-half" placeholder="#" onchange="orderQuantities()">
            </div>
        </div> 
        <div class="form-group col-sm-5">
                    <label>Item Name:<span class="alert">*</span></label> 
                <div> 
                    <input type="text" required name="item-name" id="item-name" size="40" value="Apples">
                </div>    
            </div>
</div>

        <div class="d-inline row">
           
            <div class="form-group col-sm-2">
                        <label># In Box:<span class="alert">*</span></label> 
                <div> 
                        <input type="number" required name="item-count" id="item-count" placeholder="#" onchange="orderQuantities()">
                </div>
            </div>
            <div class="form-group col-sm-1">
                        <label>Unit:<span class="alert">*</span></label> 
                <div> 
                        <select required name="item-unit" id="item-unit">

                            <option value="count">count</option>
                            <option value="pound">pound</option>
                            <option value="each">each</option>
</select>
                </div>
            </div>
            <!-- -->
            <div class="form-group col-sm-2">
                        <label>Box Price:<span class="alert">*</span></label> 
                <div> 
                    <input type="number" name="item-price" required id="item-price" placeholder="$0.00" onchange="orderQuantities()">
                </div>
            
            </div>
                <!-- -->
                <div class="form-group col-sm-2">
                        <label>#Boxes to Order:</label> 
                <div> 
                    <input type="number" name="item-quantity" id="item-quantity" readonly >
                </div>
            </div> 
            <!-- -->
            <div class="form-group col-sm-2">
                        <label>Item Total:</label> 
                <div> 
                    <input type="number" name="item-total" id="item-total" readonly >
                </div>
            </div>  
</div>
           
       
            
           
            <div class="d-inline row">
        <div class="form-group col-sm-2">
                        <label>Total with Tax:</label> 
                <div> 
                    <input type="number" readonly step=".01" name="grand-total" id="grand-total" >
                </div>
            </div> 
</div>
<h3>Amount Left to Spend:<span id="over-under"></span></h3>
        <input type="submit" name="submit" id="regbtn" value="Submit" class="btn-success">     
        </form>
</div>
           

        </div>
    </div>
</div>

</div>
</div>

    
</div>
</div>
</div>


       
 <script src ="/scripts/functions.js"></script>
 <script src ="/scripts/order-quantities.js"></script>
    <?php include($_SERVER["DOCUMENT_ROOT"] . '/common/footer.php');?> 