import pandas as pd
import sys
#spath for the excel file
df = pd.read_excel(r'C:\Users\Srikanth\Desktop\sampl.xlsx')
data_to_find = sys.argv[1]
print(data_to_find)
if(data_to_find[0:5]=='https'):
    rows = df.index[df['link'] == data_to_find].tolist()
else:
    rows = df.index[df['certificate_ID'] == data_to_find].tolist()
if len(rows) > 0:
    row_index = rows[0]
    specific_column = "link"
    specific_column1 = "type"
    column_value = df.at[row_index, specific_column]
    column_value2 = df.at[row_index, specific_column1]
    print(f" {column_value}")
    print(f" {column_value2}")
