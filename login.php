            	<br /><br /><br /><br /><br /><br /><br />
<center>
            	<div class="login">
                	<form action="login_check.php" method="post">
                    	<table class="table_data_input">
                            <tr>
                            	<td><label for="login_user">Terminal</label></td>
                                <td>
                                    <select name="login_terminal" id="login_terminal" >
                                        <option value="">Select</option>
                                        <option value="Terminal 1">Terminal 1</option>
                                        <option value="Terminal 2">Terminal 2</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                            	<td><label for="login_user">User Name</label></td>
                                <td><input type="text" name="login_user" id="login_user" /></td>
                            </tr>
                            <tr>
                            	<td><label for="login_pass">Password</label></td>
                                <td><input type="password" name="login_pass" id="login_pass" /></td>
                            </tr>
                            <tr>
                            	<td></td>
                            	<td>
                                	<input type="submit" name="login" class="button" value="Login" onclick="return login_check()"/> 
                              	</td>
                            </tr>
                        </table>
                    </form>
                    <span id="login_info"></span>
                </div>
</center>
