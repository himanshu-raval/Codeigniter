Basic Query Logic:
-----------------
$query = $this->db->get('mytable');  // Produces: SELECT * FROM mytable
$query = $this->db->get('mytable', 10, 20);// Executes: SELECT * FROM mytable LIMIT 20, 10

Fetch Data From Recodrs :
--------------------------
$query = $this->db->get('mytable');
foreach ($query->result() as $row)
{
        echo $row->title;
}
OR
$query = $this->db->query("YOUR QUERY");
foreach ($query->result_array() as $row)
{
        echo $row['title'];
        echo $row['name'];
        echo $row['body'];
}

$query = $this->db->query("YOUR QUERY");
$row = $query->row();
if (isset($row))
{
        echo $row->title;
        echo $row->name;
        echo $row->body;
}

--------------------
$row = $query->row(5);  //If you want a specific row returned you can submit the row number as a digit in the first parameter: 


For ROW.
-------
$row = $query->first_row()
$row = $query->last_row()
$row = $query->next_row()
$row = $query->previous_row()

By default they return an object unless you put the word “array” in the parameter:

$row = $query->first_row(‘array’)
$row = $query->last_row(‘array’)
$row = $query->next_row(‘array’)
$row = $query->previous_row(‘array’)

All the methods above will load the whole result into memory (prefetching).







