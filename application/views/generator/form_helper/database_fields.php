<label>Field type in database</label>                            
<select class="database_fields">
    <option value="INT">INT</option>
    <option value="VARCHAR" selected="selected">VARCHAR</option>
    <option value="TEXT">TEXT</option>
    <option value="DATE">DATE</option>
    <optgroup label="NUMERIC">
        <option value="TINYINT">TINYINT</option>
        <option value="SMALLINT">SMALLINT</option>
        <option value="MEDIUMINT">MEDIUMINT</option>
        <option value="INT">INT</option>
        <option value="BIGINT">BIGINT</option>
        <option value="-">-</option>
        <option value="DECIMAL">DECIMAL</option>
        <option value="FLOAT">FLOAT</option>
        <option value="DOUBLE">DOUBLE</option>
        <option value="REAL">REAL</option>
        <option value="-">-</option>
        <option value="BIT">BIT</option>
        <option value="BOOLEAN">BOOLEAN</option>
        <option value="SERIAL">SERIAL</option>
    </optgroup>
    <optgroup label="DATE and TIME">
        <option value="DATE">DATE</option>
        <option value="DATETIME">DATETIME</option>
        <option value="TIMESTAMP">TIMESTAMP</option>
        <option value="TIME">TIME</option>
        <option value="YEAR">YEAR</option>
    </optgroup>
    <optgroup label="STRING">
        <option value="CHAR">CHAR</option>
        <option value="VARCHAR" selected="selected">VARCHAR</option>
        <option value="-">-</option>
        <option value="TINYTEXT">TINYTEXT</option>
        <option value="TEXT">TEXT</option>
        <option value="MEDIUMTEXT">MEDIUMTEXT</option>
        <option value="LONGTEXT">LONGTEXT</option>
        <option value="-">-</option>
        <option value="BINARY">BINARY</option>
        <option value="VARBINARY">VARBINARY</option>
        <option value="-">-</option>
        <option value="TINYBLOB">TINYBLOB</option>
        <option value="MEDIUMBLOB">MEDIUMBLOB</option>
        <option value="BLOB">BLOB</option>
        <option value="LONGBLOB">LONGBLOB</option>
        <option value="-">-</option>
        <option value="ENUM">ENUM</option>
        <option value="SET">SET</option>
    </optgroup>
    <optgroup label="SPATIAL">
        <option value="GEOMETRY">GEOMETRY</option>
        <option value="POINT">POINT</option>
        <option value="LINESTRING">LINESTRING</option>
        <option value="POLYGON">POLYGON</option>
        <option value="MULTIPOINT">MULTIPOINT</option>
        <option value="MULTILINESTRING">MULTILINESTRING</option>
        <option value="MULTIPOLYGON">MULTIPOLYGON</option>
        <option value="GEOMETRYCOLLECTION">GEOMETRYCOLLECTION</option>
    </optgroup>
</select>
<label>Length</label>
<input type="text" class="database_length" />