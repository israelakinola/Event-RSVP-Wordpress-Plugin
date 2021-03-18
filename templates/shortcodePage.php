
<div class="container">
    <div class="poster" style="height:400px; width:800px; background:url('<?php  echo  $event['event_poster'] ?>')">
    
    </div>

    <div class="description">
        <h1><?php echo $event['event_title'] ?></h1>
        <p class="text-center">Venue : <strong><?php echo $event['event_venue'] ?> </strong></p>
        <p>Date & Time: <strong><?php echo $event['event_date']  ?> </strong></p>
    </div>

    
    <div class="rsvp" style="margin-top:36px;">
        <h5>Please enter your email address and total number
                of attendees to proceed with your RSVP.</h5>
        <form action="<?php echo $_SERVER['REQUEST_URI']; ?>" method="post">
        <div class="form-group">
            <label for="exampleInputPassword1">Name</label>
            <input type="text"  style="display:block; width:80%;" class="form-control" name="attendee_name">
        </div>
        <div class="form-group" style="margin-top:24px; margin-bottom:24px;">
            <label for="exampleInputEmail1">Email address</label>
            <input style="display:block; width:80%;" type="email" class="form-control" name="attendee_email" aria-describedby="emailHelp" placeholder="Enter email">
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>

    </div>

</div>


