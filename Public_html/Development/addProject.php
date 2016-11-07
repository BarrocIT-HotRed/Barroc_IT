<?php
/**
 * Created by PhpStorm.
 * User: Startklaar
 * Date: 30-10-2016
 * Time: 20:56
 */
require_once '../header.php'
?>
<div class="content">
    <h1>Add project</h1>
    
    <img src="" alt="">
    <form action="" method="post">
        <div class="form-group">
            <label for="project-id">Project number</label>
            <input type="text" name="project-id" id="project-id">
        </div>
    
        <div class="form-group">
            <label for="costumer-id">Costumer number</label>
            <input type="text" name="costumer-id" id="costumer-id">
        </div>
    
        <div class="form-group">
            <label for="costumer-name">Costumer name</label>
            <input type="text" name="costumer-name" id="costumer-name">
        </div>
    
        <div class="form-group">
            <label for="company-name">Company Name</label>
            <input type="text" name="CompName" id="company-name">
        </div>
    
        <div class="form-group">
            <label for="maintenance-contract">Maintenance contract</label>
            <input type="radio" name="MaintContract" value="Yes" id="maintenance-contract">Yes
            <input type="radio" name="MaintContract" value="No" id="maintenance-contract">No
        </div>
    
        <div class="form-group">
            <p>Applications</p>
            <textarea name="App" id="applications" cols="30" rows="10"></textarea>
        </div>
    
        <div class="form-group">
            <label for="hardware">Hardware</label>
            <input type="text" name="Hware" id="hardware">
        </div>
    
        <div class="form-group">
            <label for="software">Software</label>
            <input type="text" name="Sware" id="software">
        </div>
    
        <div class="form-group">
            <label for="operating-system">Operating system</label>
            <input type="text" name="OpSystem" id="operating-system">
        </div>

        <div class="form-group">
            <label for="internal-contact">Internal Contact</label>
            <input type="text" name="IntContact" id="internal-contact">
        </div>

        <div class="form-group">
            <label for="deadline">Deadline</label><br>
            <p>Can't go lower than the 31st of December, 2016.</p>
            <input type="date" name="deadline" id="deadline" min="2016-12-31">
        </div>

        <div class="form-group">
            <p>Project description</p>
            <textarea name="project-desc" id="project-desc" cols="30" rows="10"></textarea>
        </div>
    
    
    </form>
    
    
    
    
    <div class="btn">
        <button><a href="">Publish</a></button>
    </div>
    
    <div class="btn">
        <button><a href="development-website.php">Back</a></button>
    </div>
</div>

