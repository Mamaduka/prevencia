<div class='block'>
	<p>ზოგადი ინფორმაცია</p>
	<div class='row'>
		<div class="col-md-6">
			<select name="FORWHO" title="შეავსეთ ველი" id="FORWHO" class="form-control" required>
				<option selected="selected" disabled>ვისთვის არის სერვისი?</option>
				<option>ადამიანებისთვის</option>
				<option>ბიზნესებისთვის</option>
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
			<input class="form-control" title="შეავსეთ ველი" id='name' name='NAME' placeholder="სახელი"
				required />

		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id='lastname' name='LASTNAME'
				placeholder='გვარი' required />
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id='email' name='EMAIL' placeholder='ელ. ფოსტა'
				required />
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id='phone' name='PHONE'
				placeholder='ტელეფონის ნომერი' required />
		</div>
	</div>
</div>

<div class='block'>
	<p>სერვისი</p>
	<div class='row'>
		<div class="col-md-6">
			<select name="SERVICES" title="შეავსეთ ველი" id="services" class="form-control" required>
				<option selected="selected" disabled>აირჩიეთ კატეგორია</option>
				<option>ჯანმრთელობა</option>
				<option>განათლება</option>
				<option>კვება</option>
				<option>ტელეკომუნიკაცია</option>
				<option>სხვადასხვა</option>
			</select>
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id='SERVICENAME' name='servicename'
				placeholder='სერვისის დასახელება' required />
		</div>
		<div class="col-md-12">
			<p>სერვისის/პროდუქტის ნამდვილობის გადასამოწმებლად, გთხოვთ მიუთითოთ ბმული თქვენი ვებგვერდიდან/FB გვერდიდან</p>
			<input class="form-control" title="შეავსეთ ველი" name='COMPANYSITE' id='companysite'
				placeholder="www.example.com" required />
		</div>
		<div class="col-md-12">
			<textarea maxlength="600" class="form-control"
				placeholder="აღწერე სერვისი (მაქსიმუმ 600 სიმბოლო)" title='შეავსეთ ველი' name="SERVICEDESC" id="servicedesc" required></textarea>
		</div>
		<div class="col-md-6">
			<input type='file' class="form-control" title="ატვირთე ლოგო" id='logo' name='LOGO' placeholder='ატვირთეთ ლოგო' />
			<div class="fake-input">
				<div class='uploaded'>ატვირთეთ თქვენი ლოგო</div>
				<span>ატვირთვა</span>
			</div>
		</div>
		<div class="col-md-6">
			<input class="form-control" title="შეავსეთ ველი" id='duration' name='SERVICEDURATION'
				placeholder='რა თარიღამდეა სერვისი ხელმისაწვდომი' required />
		</div>

		<div class="col-md-12">
			<button class="btn btn-yellow">გაგზავნა</button>
		</div>
	</div>
</div>
