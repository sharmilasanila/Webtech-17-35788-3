<html>
    <body>

        <form action="form.php" method="POST">
        
            Name: <input type="text" name="name"> <br/> <br/>
            Email: <input type="text" name="email"> <br/> <br/>
	    Contact: <input type="number" name="contact"> <br/> <br/>
	    Address: <input type="text" name="address"> <br/> <br/>
	    Amount: <input type="number" name="amount"> <br/> <br/>
	    Delivery Charge: <input type="number" name="delivery charge"> <br/> <br/>
	    Total: <input type="number" name="total"> <br/> <br/>
	    Payment Method: 
            <input type="radio" name="cash on delivery" value="cash on delivery"> Cash On Delivery
            <input type="radio" name="online" value="online"> Online

            <br/> <br/> <br/>
            <input type="submit" name="submit" value="Thank You">
        </form>

    </body>
</html>