<div class='block'>
	<p>ზოგადი ინფორმაცია</p>
	<div class='row'>
		<div class="col-md-6">
			<select name="FORWHO" title="შეავსეთ ველი" id="FORWHO" class="form-control" required>
				<option selected="selected" disabled>ვისთვის არის სერვისი?</option>
				<option>B2C</option>
				<option>B2B</option>
			</select>
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" name='COMPANYNAME' id='companyname'
				placeholder="კომპანიის/ორგანიზაციის სახელი" required />
		</div>
	</div>
</div>

<div class='block'>
	<p>საკონტაქტო</p>
	<div class='row'>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id="fullname" name="FULLNAME" placeholder="სახელი, გვარი" required />
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id="phone" name="PHONE" placeholder='ტელეფონის ნომერი' required />
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id='email' name="EMAIL" placeholder="ელ. ფოსტა" required />
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id="source" name="SOURCE" placeholder="წყარო" required />
		</div>
	</div>
</div>

<div class='block'>
	<p>სერვისი</p>
	<div class='row'>
		<div class="col-md-6">
			<select name="SERVICES" title="შეავსეთ ველი" id="services" class="form-control" required>
				<option selected="selected" disabled>აირჩიეთ კატეგორია</option>
				<option>B2B</option>
				<option>IT</option>
				<option>გადაზიდვა</option>
				<option>განათლება</option>
				<option>გართობა</option>
				<option>დაზღვევა</option>
				<option>კვება და სასმელი</option>
				<option>ონლაინ მაღაზია</option>
				<option>სამართალი</option>
				<option>სამშენებლო</option>
				<option>სახელმწიფო სერვისები</option>
				<option>სახლი</option>
				<option>სხვა</option>
				<option>ტანსაცმელი და აქსესუარები</option>
				<option>ტელეკომუნიკაცია</option>
				<option>ტექნიკა</option>
				<option>ფინანსები</option>
				<option>ჯანმრთელობა და ჰიგიენა</option>
				<option>სხვა</option>
			</select>
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id="SERVICENAME" name="servicename" placeholder="სერვისის დასახელება" required />
		</div>
		<div class="col-md-12">
			<textarea maxlength="600" class="form-control" placeholder="აღწერეთ სერვისი (მაქსიმუმ 600 სიმბოლო)" title='შეავსეთ ველი' name="SERVICEDESC" id="servicedesc" required></textarea>
		</div>
		<div class="col-md-6">
			<input type='file' class="form-control" title="ატვირთე ლოგო" id="logo" name="LOGO" placeholder="ატვირთეთ ლოგო" />
			<div class="fake-input">
				<div class='uploaded'>ატვირთეთ თქვენი ლოგო</div>
				<span>ატვირთვა</span>
			</div>
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id="duration" name="SERVICEDURATION" placeholder='რა თარიღამდეა სერვისი ხელმისაწვდომი' required />
		</div>

		<div class="col-md-12">
			<button class="btn btn-yellow">გაგზავნა</button>
		</div>
	</div>
</div>
