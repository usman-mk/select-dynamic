<p>
    ประเภทรถ : 
    <span>
        <select id="type" onchange="dochange('type', this.value, '', 'year');">
            <option value="0">- เลือกรถ -</option>
            <option value="1">- รถกระบะ -</option>
            <option value="2">- รถเก๋ง -</option>
        </select>
    </span>
</p>
<p>
    ปี : 
    <span>
        <select id="year" onchange="dochange('year', document.getElementById('type').value, this.value, 'interest');">
            <option value='0'>- เลือกปี -</option>
        </select>
    </span>
</p>
<p>
    ดอกเบี้ย : 
    <span>
        <select id="interest">
            <option value='0'>- เลือกดอกเบี้ย -</option>
        </select>
    </span>
</p>
