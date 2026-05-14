import re
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity

class utilc:
 def __init__(self,**kwarg):
  self.jsoni=kwarg['jsoni']
 def percentmatch(self, *, sourcel_, targets_):
  sourcel_ = [s.strip() for s in (sourcel_ if type(sourcel_)==list or type(sourcel_)==tuple else [sourcel_])]
  documents = sourcel_ + [targets_]
 
  vectorizer = TfidfVectorizer()
  tfidf = vectorizer.fit_transform(documents)
 
  target_vec = tfidf[-1]
  score=0
  for i, src in enumerate(sourcel_):
   score += cosine_similarity(tfidf[i], target_vec)[0][0] * 100
  #print(f"<>percentmatch {sourcel_} {targets_} → {score:.2f}%")
  return True if score/len(sourcel_) > 10 else False

 def match(self, sources1_, sources2_):
  return re.search("r'^"+sources1_+"$'", sources2_, flags=re.I)

 def gjf(self,list_,fields_):#gjf->getjsonfield
  return list_[self.jsoni['index'].index(fields_)]
