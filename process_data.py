#!/usr/bin/env python
import sys
import csv
import mysql.connector as mysql
import pandas as pd

excel = sys.argv[1]


mydb = mysql.connect(host="127.0.0.1", user="root",
                     password="root", database="employee")

# all_value = []
# with open("Employee_Report.csv") as csv_file:
#     file = csv.reader(csv_file, delimiter=',')

#     for row in file:
#         value = (row[0], row[1], row[2], row[3],
#                  row[4], row[5], row[6], row[7])
#         all_value.append(value)

# all_value.pop(0)
# print("allValue\n")
# print(all_value)

# can also index sheet by name or fetch all sheets
df = pd.read_excel("Employee_data.xlsx")
name_list = df['Name'].tolist()
for i in name_list:
    if(any(char.isdigit() for char in i)):
        sys.exit("The Name column with name: " +
                 i + " has a numeric entry into it, Please correct it.\n")

mycursor = mydb.cursor()
insert_query = "insert into employee_record(Name,Surname,Department,Salary,EmpID,DOJ,DOB,Manager) values (%s,%s,%s,%s,%s,%s,%s,%s)"

mycursor.executemany(insert_query, df.values.tolist())
mydb.commit()

print("DATA HAS BEEN SUCCESSFULLY INSERTED INTO DB.")
