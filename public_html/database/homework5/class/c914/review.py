#9/14 practice;
#URL
#outline/steps:
#1, open the file in "read" mode(1.txt)(nasa_2016_0914.txt)
#2, use try/except/else block (issue on error message if that does not work)
#3. read the contents of the file line by line
#4, open a second file in write mode to hold the new dataset (1.txt)
#5, read throug(loop through) on e line at a time in the source file
#6, process each line to write a corrected line in the TRAGET file
#7, close both files
#8, print statement for uesrs that the operation is complete.

def file_coversion():
    print("Create a clean data file from teh Nasa site")
    source = '1.txt'
    target = '1_out.txt'
    
    try: 
        s = open(source,'r')
    except:
        print("file missing or cannot be read")
    else:
        n = 0
        head_row = False;
        print("data process succeed")
        t = open(target,'w')
        for line in s:
            text = line
            if text[0:4].isalnum()or header_row:
                if not header_row:
                    t.write(text)
                    head_row = True
                    n +=1
            



        t.close()
        s.close()
        print("Conversion complete")
        print("there are "+n+" lines.")
        
def main():
    file_conversion()

#goal: to create a usable files
